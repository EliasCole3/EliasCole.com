// ***********************
//
// get query string params
//
// ***********************
function getUrlParams(url) {
    let paramObj = {}

    // split the url on '?' and '&'
    let params = url.split(/[\?&]+/)

    // delete the url
    delete params[0]

    // create an object with key/value pairs reflecting the url params
    // e.g. { token: 'XAKz8QqKJTm47MaWT1lCcTAgIHD8ICAG', form: 'json'}
    params.forEach(x => {
        let keyValuePair = x.split('=')
        paramObj[keyValuePair[0]] = keyValuePair[1]
    })

    return paramObj
}

// usage
let params = getUrlParams(window.location.href)





// ******************
//
// make a GET request
//
// ******************
function getData(url) {
  let deferred = $.ajax({
    type: 'GET',
    url: url,
    success: (data, status, jqXHR) => {},
    error: (jqXHR, status) => {
      console.log('error: ', status, jqXHR)
    }
  }).promise()

  return deferred
}

// usage
getData(url).then(x => {
  let data = JSON.parse(x)
  // do things with data
})

// usage for multiple requests
let deferreds = [
  getData(url1),
  getData(url2)
]

$.when.apply($, deferreds).done((data1, data2) => {
  // do things once all deferreds are resolved
})





// *******************************
//
// end user sign-in to get a token
//
// *******************************
let config = {
  endUserSignInUrl: 'https://euid.theplatform.com/idm/web/Authentication/signIn',
  endUserDirectory: 'W10iUYLTTztsNjQ3'
}

function signIn(user, pass) {
  let deferred = $.ajax({
    type: 'GET',
    url: `${config.endUserSignInUrl}?schema=1.1&form=json&username=${config.endUserDirectory}/${user}&password=${pass}`,
    success: (data, status, jqXHR) => {},
    error: (jqXHR, status) => {
      console.log('error: ', status, jqXHR)
    }
  }).promise()

  return deferred
}

// usage
signIn(user, pass).then(data => {
  data = JSON.parse(data)
  let token = data.signInResponse.token
  // do stuff
})





// todo: make a POST request



























