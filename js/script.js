window.addEventListener('DOMContentLoaded', function () {
    //hamburger
    const hamburgerBtn = document.querySelector('.header__hamburger');
    if (hamburgerBtn) {
        hamburgerBtn.addEventListener('click', e => {
            let headerEl = e.target.closest('.header');
            if (headerEl) {
                headerEl.classList.toggle('menu_active');
            }
        })
    }
    //expand-collapse
    let expandHeading = document.querySelectorAll('.expand-heading'),
        expandContent = document.querySelectorAll('.expand-content'),
        expandContainer = document.querySelectorAll('.expand-container');
    if(expandHeading && expandContent && expandContainer) {
        expandHeading.forEach(item=>{
            item.addEventListener('click', e=>{
                let current = e.target;
                current.closest('.expand-container').classList.toggle('active');
            })
        })
    }

    //function post via fetch
    async function postViaFetch(url, formName, redirectURL = false) {
        const formData = document.forms[formName],
            inputSubmit = formData.querySelector('input[type="submit"]');
        if (inputSubmit.disabled === false) {
            const inputSubmitVal = inputSubmit.value;
            inputSubmit.disabled = true;
            inputSubmit.value = 'Loading ...';
            setTimeout(() => {
                inputSubmit.value = inputSubmitVal;
                inputSubmit.disabled = false
            }, 10000)
        }
        await fetch(url, {method: 'POST', body: new FormData(formData)})
            .then(res => {
                if (res.ok && (res.status >= 200 && res.status < 300)) {
                    return res;
                } else {
                    throw new Error();
                }
            })
            .then(res => {
                if (redirectURL) {
                    window.location.href = redirectURL;
                }
            })
            .catch(err => alert('SERVER ERROR!'));
    }

    try {
        document.forms['reg-form'].addEventListener('submit', function (e) {
            e.preventDefault();
            postViaFetch('https://script.google.com/macros/s/AKfycbzLq1a6L-hEfmvpF6AMXZeMA4TNSWI-9Qey7-c7gSgvWldXLfaRT5kfXJSjIV44VZnX8g/exec', 'reg-form', '/thanks/');
        });
    } catch (e) {
        console.log(e);
    }
});