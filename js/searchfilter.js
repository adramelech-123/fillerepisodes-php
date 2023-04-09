// Search filter

let filterInput = document.getElementById('filterInput')

filterInput.addEventListener('keyup', filterNames);

function filterNames() {
    // Get value of search input
    let filterValue = document.getElementById('filterInput').value.toUpperCase()
      

    // Get each list-item
    let list = document.querySelectorAll('#anime')


    for(i=0;i < list.length; i++) {

        // get each a tag in the list items
        let a = list[i].getElementsByTagName('a')[0]

        // apply filter
        if(a.innerText.toUpperCase().indexOf(filterValue) > -1) {
             
            list[i].style.display = ''
        }

        else {
            
            list[i].style.display = 'none'
        }

       
    }
      
}
