module.exports = {
    // 修改webpack的配置
    configureWebpack: {
        // 把原本需要写在webpack.config.js中的配置代码 写在这里 会自动合并
        externals: {
            'jquery' : '$',
        }
    }
}
