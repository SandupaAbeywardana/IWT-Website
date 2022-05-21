const searchBar = document.querySelector(".search");
const inputBox = searchBar.querySelector("input");
const suggestionBox = searchBar.querySelector(".autocom-box");

// When user search for items
inputBox.onkeyup = (e)=>{
    let userData = e.target.value;
    let emptyArray = [];
    if(userData){
        emptyArray = suggestions.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            return data = '<li>'+ data + '</li>';
        });
        console.log(emptyArray);
        searchBar.classList.add("active");
    }else{

    }
    showSuggestion(emptyArray);
}

function showSuggestion(list){
    let listData;
    if(!list.length){

    }else{
        listData = list.join('');
    }
    suggestionBox.innerHTML = listData;
}
