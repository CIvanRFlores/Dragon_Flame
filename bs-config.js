module.exports = {
    Proxy : "127.0.0.1",
    startPath : "/Dragon_Flame/public",
    files : [
        "./public/*.css",
        "./public/js/*.js",
        "./public/*.php",

        "./src/**/*.php",
        "./src/**/*.css",
        "./src/**/*.js"
    ],

    ignore : [
        "./public/output.css"
    ],
    reloadDelay : 300,
    notify : false,
    open : true
};