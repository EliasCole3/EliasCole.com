module.exports = function(grunt) {

  grunt.initConfig({

    watch: {

      options: {
        livereload: true,
        hostname: 'localhost'
      },

      // if any .scss file in the project changes, run sass:build
      sass: {
        files: ['**/*.scss'],
        tasks: ['sass:build'],
      },

      // if any .es6 file in the project changes, run sass:build
      babel: {
        files: ['**/*.es6'],
        tasks: ['babel:dist'],
      },

      // if scr/index.html changes, run copy:index
      index: {
        files: ['src/index.html'],
        tasks: ['copy:index']
      },

      // if any .css files in the tree below src/styles changes, run copy:styles
      styles: {
        files: ['src/styles/**/*.css'],
        tasks: ['copy:styles']
      },

      // cacheBust: {
      //   files: ['dist/index.html'],
      //   tasks: ['cacheBust']
      // }
    },

    sass: {
      build: {
        options: {

          // Determines the output format of the final CSS style.
          // Default: nested Values: nested, expanded, compact, compressed
          // https://github.com/sass/node-sass#options
          style: 'expanded'
        },
        files: {
          'dist/styles/main.css': 'src/styles/main.scss',
        }
      }
    },

    copy: {

      // copy everything in src/images to dist/images recursively
      images: {
        expand: true,
        cwd: 'src/images',
        src: '**',
        dest: 'dist/images',
      },

      // copy all .js files in src/scripts to dist/scripts recursively
      libraries: {
        expand: true,
        cwd: 'src/scripts',
        src: '**/*.js',
        dest: 'dist/scripts',
      },
      index: {
        expand: true,
        cwd: 'src/',
        src: 'index.html',
        dest: 'dist/',
      },
      fonts: {
        expand: true,
        cwd: 'src/fonts',
        src: '**',
        dest: 'dist/fonts',
      },
      styles: {
        expand: true,
        cwd: 'src/styles',
        src: ['*.css', '*.png'],
        dest: 'dist/styles',
      }
    },

    babel: {
      options: {
        sourceMap: true,
        presets: ['es2015']
      },

      // here for an example, traspiling only one file
      main: {
        files: {
          // 'destination': 'source'
          'dist/scripts/main.js': 'src/scripts/main.es6'
        }
      },

      // transpile all .es6 files in src/ recursively, put them in dist/ with a .js extension
      dist: {
        files: [{
          'expand': true,
          'cwd': 'src/',
          'src': ['**/*.es6'],
          'dest': 'dist/',
          'ext': '.js'
        }]
      }
    },

    connect: {
      server: {
        options: {
          port: 9001,
          // base: 'dist',
          livereload: true,
          hostname: 'localhost'
        }
      }
    },

    cacheBust: {
      taskName: {
        options: {
          assets: ['dist/scripts/*']
        },
        src: ['dist/index.html']
      }
    }

  })

  // so we can do `$ grunt` instead of `$ grunt watch`
  grunt.registerTask('default', function() {
    grunt.task.run(['connect', 'watch'])
  })

  // for testing
  // grunt.registerTask('test', 'Log some stuff.', function() {
  //   grunt.log.write('Logging some stuff...').ok()
  // })

  grunt.registerTask('build', function() {
    grunt.task.run(['copy', 'sass:build', 'babel:dist'])
  })

  grunt.loadNpmTasks('grunt-contrib-watch')
  grunt.loadNpmTasks('grunt-babel')
  grunt.loadNpmTasks('grunt-contrib-copy')
  grunt.loadNpmTasks('grunt-sass')
  grunt.loadNpmTasks('grunt-contrib-connect')
  grunt.loadNpmTasks('grunt-cache-bust')
}


