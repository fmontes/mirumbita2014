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
                '<%= project.app %>/js/**/*.js'
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
                    'js/{,*/}*.*'
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
        'copy:dist'
    ]);

};
