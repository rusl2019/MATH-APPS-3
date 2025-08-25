import resolve from "@rollup/plugin-node-resolve";
import commonjs from "@rollup/plugin-commonjs";

export default {
  input: "assets/src/js/app.js",
  output: {
    file: "assets/dist/bundle.js",
    format: "iife",
    sourcemap: true,
  },
  plugins: [
    resolve(),
    commonjs(),
  ],
};
