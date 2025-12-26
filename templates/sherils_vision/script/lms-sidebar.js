/**
 * LMS Sidebar Menu JavaScript - sherils_vision template
 * Handles sidebar toggle and interactions
 */

(function() {
    'use strict';

    // Initialize sidebar on document ready
    document.addEventListener('DOMContentLoaded', function() {
        initSidebar();
    });

    /**
     * Initialize sidebar functionality
     */
    function initSidebar() {
        const sidebar = document.querySelector('.lms-sidebar');
        const sidebarToggle = document.querySelector('.sidebar-toggle');
        const sidebarNav = document.getElementById('sidebar-menu');
        const navLinks = document.querySelectorAll('.nav-item.nav-menu-group > .nav-link');

        if (!sidebar || !sidebarNav) {
            return; // Exit if sidebar elements don't exist
        }

        // Handle sidebar toggle button click
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', function(e) {
                e.preventDefault();
                sidebar.classList.toggle('show');
                sidebarNav.classList.toggle('in');
            });
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                if (sidebar && !sidebar.contains(e.target) && (!sidebarToggle || !sidebarToggle.contains(e.target))) {
                    if (sidebar.classList.contains('show')) {
                        sidebar.classList.remove('show');
                        sidebarNav.classList.remove('in');
                    }
                }
            }
        });

        // Handle menu group collapse/expand
        navLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                // Only prevent default if this is a collapse toggle
                if (this.getAttribute('href').startsWith('#sidebar-group-')) {
                    e.preventDefault();
                    
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        // Toggle the collapsed state
                        const isExpanded = this.getAttribute('aria-expanded') === 'true';
                        this.setAttribute('aria-expanded', !isExpanded);
                        
                        // Toggle the collapse class
                        if (target.classList.contains('in')) {
                            target.classList.remove('in');
                        } else {
                            target.classList.add('in');
                        }
                    }
                }
            });
        });

        // Handle window resize - reset sidebar on desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                // Reset on larger screens
                if (sidebar && sidebar.classList.contains('show')) {
                    sidebar.classList.remove('show');
                }
                if (sidebarNav && !sidebarNav.classList.contains('in')) {
                    sidebarNav.classList.add('in');
                }
            }
        });
    }

})();
