const webpack = require('webpack');

module.exports = env => {
    return {
        externals: {
            // require("jquery") is external and available
            //  on the global var jQuery
            "jquery": "jQuery"
        }
    }
}
