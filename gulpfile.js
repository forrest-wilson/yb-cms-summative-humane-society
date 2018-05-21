const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const jshint = require("gulp-jshint");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");

gulp.task("sass", () => {
    return gulp.src("./assets/stylesheets/sass/style.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer({
            browsers: ["last 2 versions"],
            cascade: false
        }))
        .pipe(sourcemaps.write(""))
        .pipe(gulp.dest("./assets/stylesheets/css/"));
});

gulp.task("lint", () => {
    return gulp.src("./assets/scripts/app.js")
        .pipe(jshint())
        .pipe(jshint.reporter("default"))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest("./assets/scripts/"));
});

gulp.task("default", ["sass", "lint"], cb => {
    gulp.watch("./assets/stylesheets/sass/**/*.scss", ["sass"], cb);
    gulp.watch("./assets/scripts/app.js", ["lint"], cb);
});