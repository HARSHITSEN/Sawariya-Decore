let sbtn = document.querySelector(".submitbtn")
let form = document.querySelector("#form")
sbtn.addEventListener('click', event => {
    event.preventDefault()
    let formdata=new FormData(form)
    let value=[...formdata.values()]
    let xhr = new XMLHttpRequest()
    xhr.open("POST", "contact.php", true)
    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded')
    xhr.onload = function () {
        if (xhr.status == 200) {
            console.log(xhr.response)
        }
        else {
            console.log("something is going wrong")
        }
    }
    xhr.send('name=' +value[0] + '&email=' +value[1] + '&contact=' + value[2]+ '&message=' + value[3])
    form.reset()
})