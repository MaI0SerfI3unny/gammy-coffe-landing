import { createRateYo } from './rating.js';
import { checkExistLike } from "./available_like.js" 

checkExistLike()

async function getComments() {
    let url = "paginate.php";
    const data = await fetch(url)
    const response = await data.json();
    return response
} 
const comment = await getComments()


function formatUkrainianDate(dateString) {
    const months = [
      "Січень", "Лютий", "Березнь",
      "Квітень", "Травень", "Червень",
      "Липень", "Серпень", "Вересень",
      "Жовтень", "Листопад", "Грудень"
    ];
    const date = new Date(dateString);
    const month = months[date.getMonth()];
    const day = date.getDate();
    const year = date.getFullYear();
  
    return `${month} ${day}, ${year}`;
  }


$(function () {
    $('#pagination-demo').pagination({
        dataSource: comment.data,
        pageSize: 4,
        callback: function (data, pagination) {
            displayData(data);
        },
    });
    
    function displayData(data) {
        var html = '';
        
        for (var i = 0; i < data.length; i++) {
            html += createCommentHTML(data[i]);
        }
        
        $('#data-container').html(html);
        for (var i = 0; i < data.length; i++) {
            createRateYo("rated_"+data[i].commentId, (data[i]?.value || 0), "10px")
        }
    }
});

  
function createCommentHTML(comment) {
    async function createPostLike(id, type){
        const url = 'like.php';
        const request = await fetch(url, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                commentId : id,
                typeLike: type
            }),
        })
        const response = await request.json();
        if (response.status === 200)
        {
            const element_change = document.getElementById(type ? `butt_comment_like_${id}` : `butt_comment_dislike_${id}`)
            if(element_change)
            {
                const paragraphElement = element_change.querySelector('p');
                const paragraphValue = paragraphElement.textContent;
                element_change.innerHTML = `${type?"Так":"Ні"}<p>${parseInt(paragraphValue)+1}</p>`
                const like_arr = JSON.parse(localStorage.getItem('like_arr'))
                localStorage.setItem('like_arr', JSON.stringify([...like_arr, id]));
                const element_close = document.getElementById(`guess_container_${id}`)
                if(element_close)
                    element_close.style.display = 'none';
            }
        }
    }
    const functionString = createPostLike.toString();
    const already_like = JSON.parse(localStorage.getItem('like_arr'))
    const find_already_like = already_like.filter((el) => el === parseInt(comment?.commentId))
    return `<div class="comment__item">
                <div class="comment__item__profile">
                    <p class="name_profile">- ${comment?.name || ''} ${comment?.surname || ''}</p>
                    <p class="date_profile">${formatUkrainianDate(comment?.createdAt)}</p>
                </div>
                <div class="comment__item__text">
                    <div class="rating-user-container" id="rated_${comment?.commentId}"></div>
                    <p class="text">${comment?.message || ''}</p>
                    ${!find_already_like.length && `
                    <div id="guess_container_${comment?.commentId}" class="guess_container">
                        <p class="guess_text">Чи був цей відгук корисним?</p>
                        <button id="butt_comment_like_${comment?.commentId}" class="guess_button" onclick='createPostLike(${comment?.commentId},${true})'>Так<p>${comment.yesCount || 0}</p></button>
                        <button id="butt_comment_dislike_${comment?.commentId}" class="guess_button" onclick='createPostLike(${comment?.commentId},${false})'>Ні<p>${comment?.noCount || 0}</p></button>
                    </div>`}
                </div>
            </div>
            <script>${functionString}</script>
        `
}