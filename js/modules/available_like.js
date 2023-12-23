

function checkExistLike (){
    const like_arr = localStorage.getItem('like_arr');
    if(!like_arr)
    {
        localStorage.setItem('like_arr', JSON.stringify([]));
        return []
    }
    return JSON.parse(like_arr)
}

function setNewArrLike(id){
    const like_arr = JSON.parse(localStorage.getItem('like_arr'))
    localStorage.setItem('like_arr', JSON.stringify([...like_arr, id]));
    const element_close = document.getElementById(`guess_container_${id}`)
    if(element_close)
    {
        console.log("founded")
        element_close.style.display = 'none';
    }
}

export {checkExistLike, setNewArrLike};