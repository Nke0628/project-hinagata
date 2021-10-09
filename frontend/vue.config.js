module.exports = {
    devServer: {
        proxy: {
            '/api': {
                target: 'http://192.168.33.10:8000'
            }
        }
    }
}
