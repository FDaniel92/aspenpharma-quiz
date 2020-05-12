"use strict";

module.exports = function (grunt) {
    const sass = require('node-sass');
    // Load all Grunt tasks that are listed in package.json automagically
    require("load-grunt-tasks")(grunt);
    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),
        sass: {
            options: {
                implementation: sass,
                noCache: true,
                style: 'compressed'
            },
            dist: {
                files: {
                    "dist/css/style.css": "src/scss/style.scss"
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: [
                    'src/js/jQuery/jquery-3.4.1.min.js',
                    'src/js/nice-scroll/jquery.nicescroll.min.js',
                    'src/js/custom/*.js'
                ],
                dest: 'dist/js/build.js',
            },
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'src/images',
                    src: ['*.{png,jpg,gif}'],
                    dest: 'dist/images/'
                }]
            }
        },
        autoprefixer: {
            options: {
                map: true
            },
            dist: {
                files: {
                    'dist/css/style.css': 'dist/css/style.css'
                }
            }
        },
        watch: {
            sass: {
                files: "src/scss/**/*.scss",
                tasks: ["sass"]
            },
            concat: {
                files: "src/js/**/*.js",
                tasks: ["concat"]
            },
            imagemin: {
                files: 'src/images/*.{png,jpg,gif}',
                tasks: ['imagemin']
            }
        }
    });


  grunt.registerTask('default', ['watch']);
  grunt.registerTask('build', ['sass', 'imagemin']);
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
};
