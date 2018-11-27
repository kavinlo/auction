// vue.config.js
module.exports = {
    pages: {
        index: {
            // 页面的入口文件
            entry: 'src/views/index/index.js',
            // 页面的模板文件
            template: 'public/index.html',
            // build 生成的文件名称  例： dist/index.html
            filename: 'index.html'
        },
        // template 默认会去找 public/subpage.html 页面，如果找不到会使用 public/index.html 文件
        // 输出文件会默认的推断为 subpage.html
        // subpage: 'src/subpage/main.js'
        orders: {
            // 页面的入口文件
            entry: 'src/views/orders/orders.js',
            // 页面的模板文件
            template: 'public/orders.html',
            // build 生成的文件名称  例： dist/index.html
            filename: 'orders.html'
        },
        addresses: {
            // 页面的入口文件
            entry: 'src/views/addresses/addresses.js',
            // 页面的模板文件
            template: 'public/addresses.html',
            // build 生成的文件名称  例： dist/index.html
            filename: 'addresses.html'
        },
        addAddre: {
            // 页面的入口文件
            entry: 'src/views/addresses/addAddre.js',
            // 页面的模板文件
            template: 'public/addAddre.html',
            // build 生成的文件名称  例： dist/index.html
            filename: 'addAddre.html'
        },
        login: {
            // 页面的入口文件
            entry: 'src/views/login/login.js',
            // 页面的模板文件
            template: 'public/login.html',
            // build 生成的文件名称  例： dist/index.html
            filename: 'login.html'
        },
        regist: {
            // 页面的入口文件
            entry: 'src/views/regist/regist.js',
            // 页面的模板文件
            template: 'public/regist.html',
            // build 生成的文件名称  例： dist/index.html
            filename: 'regist.html'
        },
    }
}
