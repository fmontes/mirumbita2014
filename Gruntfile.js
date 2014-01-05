'use strict';

module.exports = function(grunt) {
    // show elapsed time at the end
    require('time-grunt')(grunt);
    // load all grunt tasks
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // configurable paths
        project: {
            app: 'app',
            dist: '../../themes/mirumbita'
        },

        // Watching files
        watch: {
            options: {
                livereload: true,
            },
            compass: {
                files: ['<%= project.app %>/scss/**/*.{scss,sass}'],
                tasks: ['compass', 'copy:css']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'copy:js']
            },
            php: {
                files: '<%= project.app %>/**/*.php',
                tasks: ['copy:php']
            },
        },

        // Compiling compass
        compass: {
            dist: {
                options: {
                    config: '<%= project.app %>/config.rb'
                }
            }
        },

        // Checking javascript files
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                '<%= project.app %>/js/**/*.js',
                '!<%= project.app %>/js/vendor/*.js'
            ]
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: '<%= project.app %>',
                    src: '**/*.{png,jpg,gif}',
                    dest: '<%= project.dist %>'
                }]
            }
        },

        // Modernizr builder for your project.
        // It is based on the Modernizr team's Modulizr tool.
        // https://github.com/Modernizr/grunt-modernizr
        modernizr: {

            // [REQUIRED] Path to the build you're using for development.
            'devFile': '<%= project.app %>/js/vendor/modernizr.dev.js',

            // [REQUIRED] Path to save out the built file.
            'outputFile': '<%= project.app %>/js/vendor/modernizr.custom.js',

            // Based on default settings on http://modernizr.com/download/
            'extra': {
                'shiv' : true,
                'printshiv' : false,
                'load' : true,
                'mq' : false,
                'cssclasses' : true
            },

            // Based on default settings on http://modernizr.com/download/
            'extensibility': {
                'addtest' : false,
                'prefixed' : false,
                'teststyles' : false,
                'testprops' : false,
                'testallprops' : false,
                'hasevents' : false,
                'prefixes' : false,
                'domprefixes' : false
            },

            // By default, source is uglified before saving
            'uglify': true,

            // Define any tests you want to implicitly include.
            'tests': ['csstransforms3d', 'csstransitions'],

            // By default, this task will crawl your project for references to Modernizr tests.
            // Set to false to disable.
            'parseFiles': true,

            // When parseFiles = true, this task will crawl all *.js, *.css, *.scss files, except files that are in node_modules/.
            // You can override this by defining a 'files' array below.
            // 'files': [],

            // When parseFiles = true, matchCommunityTests = true will attempt to
            // match user-contributed tests.
            'matchCommunityTests': false,

            // Have custom Modernizr tests? Add paths to their location here.
            'customTests': []
        },

        // Copy files to the theme
        // Images files will be copyed usign imagemin task
        copy: {
            dist: {
                expand: true,
                dot: true,
                cwd: '<%= project.app %>',
                dest: '<%= project.dist %>',
                src: [
                    '**/*.php',
                    'css/{,*/}*.*',
                    'fonts/{,*/}*.*',
                    'js/{,*/}*.*',
                    '!js/vendor/modernizr.dev.js',
                    // Bower componets
                    'bower_components/jquery/jquery.min.js',
                ]
            },
            css: {
                expand: true,
                cwd: '<%= project.app %>',
                dest: '<%= project.dist %>',
                src: 'css/{,*/}*.*'
            },
            js: {
                expand: true,
                cwd: '<%= project.app %>',
                dest: '<%= project.dist %>',
                src: 'js/{,*/}*.*'
            },
            php: {
                expand: true,
                cwd: '<%= project.app %>',
                dest: '<%= project.dist %>',
                src: '**/*.php'
            }
        }
    });

    grunt.registerTask('default', [
        'compass',
        'jshint',
        'imagemin',
        'modernizr',
        'copy:dist'
    ]);

};
