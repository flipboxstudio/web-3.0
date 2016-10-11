var merge = require('webpack-merge')
var prodEnv = require('./prod.env')

module.exports = merge(prodEnv, {
  API_HOST: '"http://localhost:8000/"',
  NODE_ENV: '"development"'
})
