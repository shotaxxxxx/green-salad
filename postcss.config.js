module.exports = {
  plugins: [
    require("autoprefixer")({
      grid: true, // IE11対応
    }),
    require("css-declaration-sorter")({
      order: "smacss", // alphabetical/ smacss / concentric-css
    }),
    require("css-mqpacker")({
      sort: true, // スマホファーストに並び替え
    }),
  ],
};
