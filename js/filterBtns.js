let filterBtns = document.querySelectorAll('.nav-link')
const tableArea = document.querySelector('.table-body')
const showType = document.querySelectorAll('.type')

console.log(tableArea.children);


filterBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        const btnType = e.currentTarget.dataset.hit
        

        for(i=0; i <showType.length; i++) {

            const showTypeText = showType[i].innerText.toLowerCase()

            // if( btnType === showTypeText) {
            //     tableArea.innerHTML = ''
            // }
            
        }

        
    })
})