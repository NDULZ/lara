# Forma LMS - AI Coding Agent Instructions

## Project Overview

**Forma** is an open-source Learning Management System (LMS) built with PHP 7.4+ and MySQL. It supports multi-tenant configurations, course management, user tracking, and assessment modules. The codebase uses a **hybrid MVC architecture** mixing legacy procedural code with modern namespaced classes and Doctrine ORM.

## Architecture

### Core Structure
- **`appCore/`** - Administration platform (user management, settings, system config)
- **`appLms/`** - Learning Management System (courses, modules, user interactions)
- **`appScs/`** - Video conferencing/synchronous communication module
- **`lib/`** - Shared libraries, utilities, and framework core
- **`Entity/`** - Doctrine ORM entity classes (database models)
- **`Migrations/`** - Doctrine DBAL migration files
- **`templates/`** - Twig template engine views and layouts
- **`plugins/`** - Plugin system for extending functionality

### Bootstrap & Dependency Injection
The entry point is `base.php` which defines core path constants and boot sequence flags:
```php
const BOOT_COMPOSER = 0;
const BOOT_CONFIG = 2;
const BOOT_UTILITY = 3;
const BOOT_SETTING = 4;
const BOOT_REQUEST = 5;
const BOOT_PLATFORM = 6;
const BOOT_DOMAIN_AND_TEMPLATE = 7;
const BOOT_PLUGINS = 8;
const BOOT_USER = 9;
const BOOT_SESSION_CHECK = 10;
```

Key singleton accessors:
- `Forma::getInstance()` - Main facade for ACL and utilities
- `FormaLms\db\DbConn::getInstance()` - Database connection (singleton)
- `FormaLms\lib\Session\SessionManager::getInstance()` - Session handling
- `FormaLms\appCore\Template\TwigManager` - Template rendering

## MVC Controllers & Routing

### Controller Inheritance Hierarchy
Three main controller types extend base `Controller`:
- **`AdmController`** - Admin/appCore actions (e.g., `SystemAdmController`, `UserManagementAdmController`)
- **`LmsController`** - LMS/appLms actions
- **`AlmsController`** - Alternate LMS controller type

Controller methods map to routes like: `index.php?r=adm/system/install` → `SystemAdmController::install()`

### Key Patterns
- Request data via `$this->request->query`, `$this->request->request`, `$this->request->server`
- Render views with `$this->render('viewName', $params)`
- Models extend base `Model` class and access DB via `DbConn`

## Database & Migrations

### Doctrine Migrations
- Configuration: `migrations.yaml` (table: `core_migration_versions`)
- Location: `Migrations/` directory with versioned files
- Execution: `bin/doctrine-migrations` or via `FormaMigrator::getInstance()`
- Key class: `FormaLms\lib\Database\FormaMigrator` - handles setup, migration execution

### Database Access
- ORM: Entities in `Entity/` folder (e.g., `CoreUser.php`, `CoreCourse.php`)
- Raw SQL: Legacy code uses procedural functions:
  ```php
  $db = \FormaLms\db\DbConn::getInstance();
  $res = $db->query($query);
  while ($obj = $db->fetch_obj($res)) { ... }
  ```
- Config: `config.php` contains `$cfg['db_user']`, `$cfg['db_pass']`, `$cfg['db_name']`, `$cfg['db_host']`

## Security & Permissions

### ACL System
- Access control via `checkPerm($capability, $require_flag, $module_name)` function
- Manager: `FormaLms\lib\Forma::getAclManager()` provides role/permission queries
- Permission checks are required on module operations
- Example from menu code:
  ```php
  if (checkPerm($obj->token, true, $obj->module_name)) {
      // Add to menu if permission granted
  }
  ```

### User & Session
- Current user: `FormaLms\lib\FormaUser::getCurrentUser()` → methods: `getUserId()`, `getUserLevelId()`, `isAnonymous()`
- Session: `SessionManager::getInstance()->getSession()` → stores course context, module selection
- Roles: `ADMIN_GROUP_GODADMIN` and other predefined constants

## Installation & Setup

### Initial Configuration
The install process follows these steps (defined in `InstallAdm` model):
1. **CHECK_REQUIREMENTS** - PHP version, extensions, file permissions
2. **CHECK_DATABASE** - DB connection, charset (utf8mb4), SQL version (5.7+)
3. **CHECK_ADMIN** - Create initial admin user
4. **CHECK_SMTP** - Email configuration
5. **CHECK_FINAL** - Run migrations, cleanup

### Running Migrations
```bash
bin/doctrine-migrations migrate
# Debug mode: append --debug flag or via FormaMigrator::getInstance()->executeCommand('migrate', ['debug' => true])
```

Key classes:
- `appCore/models/InstallAdm.php` - Installation orchestration (1894 lines)
- `lib/Database/FormaMigrator.php` - Doctrine wrapper
- `lib/Version/VersionChecker.php` - Version compatibility checks

## Development Patterns

### File Organization
- Old code: Standalone `.php` files in module dirs (e.g., `appLms/modules/test/test.php`)
- Modern code: Namespaced classes in `lib/`, `appCore/`, controllers follow PSR-4

### Language & Localization
- Lang system: `Lang::t($key, $domain)` returns translated text
- Domains: 'standard', 'course', 'menu_course', 'stats', etc.
- Files: `lib/System/lang/{language}.php` (e.g., `english.php`, `latvian.php`)

### Template Rendering (Twig)
- `templates/{template_name}/layout/` - Layout files
- `{appCore|appLms}/views/` - View files (`.html.twig`)
- Cache: `files/cache/twig/`
- Manager: `TwigManager::getEnvironment()` for Twig instance

### Database Naming Conventions
- Tables prefixed by module: `lms_*`, `core_*`, `learning_*`, `conference_*`
- Timestamp columns: `created_at`, `updated_at` (auto-managed)
- Foreign keys include `_ibfk_` suffix (e.g., `core_role_members_ibfk_1`)

## Build & Testing

### Phing Build System
- File: `build.xml` (defines targets)
- Key targets:
  - `project:setup` - Install vendors + setup
  - `project:test` - Run Behat + PHPUnit
  - `project:build` - Full build pipeline

### Testing Infrastructure
- Behat: `test/behat/behat.yml`
- PHPUnit: `test/phpunit/phpunit.xml`
- Run: `bin/phpunit`, `bin/behat`

## Common Pitfalls & Conventions

1. **Path constants**: Always use predefined constants (`_base_`, `_lib_`, `_adm_`, `_lms_`) not hardcoded paths
2. **Direct SQL safety**: Use parameterized queries with `(int)`, `(string)` casts; avoid string interpolation
3. **Singleton access**: Never instantiate singletons directly; use `getInstance()` pattern
4. **Legacy mixed with modern**: New code should use namespaces; legacy uses global functions like `sql_query()`, `cout()`
5. **Session persistence**: Always call `$session->save()` after `$session->set()`
6. **Permission checks**: Never expose functionality without `checkPerm()` validation
7. **Twig cache**: Clear `files/cache/twig/` when template structure changes
8. **Migrations**: Always declare new migrations in `Migrations/` with incrementing version numbers; use `FormaMigrator` for execution

## Version Info
- Current file version: **4.0.19**
- Required PHP: **7.4.0 - 8.1.99**
- DB version: **4.0.0**
- Key dependencies: Doctrine DBAL/ORM/Migrations, Symfony components, Twig 2.14+

