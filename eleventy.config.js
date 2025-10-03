const markdownIt = require("markdown-it");

module.exports = async function (eleventyConfig) {
    eleventyConfig.addPassthroughCopy("./src/assets/styles/style.css");
    eleventyConfig.addPassthroughCopy("./src/assets/styles/style.css.map");
    eleventyConfig.addPassthroughCopy("./src/assets/images");
    eleventyConfig.addPassthroughCopy("./src/assets/js");
    eleventyConfig.addPassthroughCopy("./src/assets/js/components");
    eleventyConfig.addPassthroughCopy("./src/admin");


    eleventyConfig.addFilter("sortByDay", function (collection) {
        return collection.sort((a, b) => a.data.dayNo - b.data.dayNo);
    });
    eleventyConfig.addFilter("sortByDate", function (collection) {
        return collection.sort((a, b) => new Date(b.data.date) - new Date(a.data.date));
    });
    eleventyConfig.addFilter("sortByOrder", function (collection) {
        return collection.sort((a, b) => a.data.order - b.data.order);
    });

    let markdownLib = markdownIt({ html: true });

    eleventyConfig.addFilter("markdownify", (content) => {
        return markdownLib.render(content || "");
    });
};
console.log("Hello from Eleventy");

module.exports.config = {
    dir: {
        input: "src",
        output: "public",
        data: "_data"
    }
};