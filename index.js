
const express = require('express')


const app = express()

app.use((req, res, next) => {
    console.log(req.headers)
    console.log(req.ip)
    console.log(req.ips)
    next()
})

app.use(express.static('public'))

app.route('/auth/create-account', async (req, res) => {
    
})

app.listen(3333, () => {
    console.log('start app on 3333')
})