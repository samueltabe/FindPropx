function pickLga(stateid){
    // alert(document.getElementById(stateid).value);
    var stateid_value = document.getElementById(stateid).value;
    fetch('/api/state-lga?state_id='+ stateid_value)
    .then(res => res.json())
    .then(res => {
        console.log(res)

        // res.map(lga => {
        //     let lgaElement = document.getElementById('lgapicker');
        //   lgaElement.innerHTML = `<option value=${lga.id}>${lga.local_name}</option>`
        // })

        res.map(lga => {
        let lgaElement = document.getElementById('lgapicker');
        let optionElement = document.createElement('option');
        optionElement.value = lga.id;
        optionElement.innerText = lga.local_name;
        lgaElement.appendChild(optionElement);
        });


    })
    .catch(error => {
        console.log(error)
    })
}

