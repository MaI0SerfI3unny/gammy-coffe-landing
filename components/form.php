<section class="form" id="form">
    <div class="container">
        <div class="col-container">
            <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="600" class="col">
                <h2>Відгуки</h2>
                <div class="rating_container_read">
                    <div id="rating"></div>
                    <p><?php echo number_format($average_res,1); ?></p>
                </div>
                <div class="rating_comment_container">
                    <div class="rating_comment_container_item">
                        <div id="rating_comment_5"></div>
                        <div class="progress_container">
                            <div class="progress_container_item" id="progress_five"></div>
                        </div>
                        <div>
                            <p id="five"><?php echo number_format((($count_five / $count) * 100), 1); ?>%</p>
                        </div>
                    </div>
                    <div class="rating_comment_container_item">
                        <div id="rating_comment_4"></div>
                        <div class="progress_container">
                            <div class="progress_container_item" id="progress_four"></div>
                        </div>
                        <div>
                            <p id="four"><?php echo number_format((($count_four / $count) * 100), 1); ?>%</p>
                        </div>
                    </div>
    
                    <div class="rating_comment_container_item">
                        <div id="rating_comment_3"></div>
                        <div class="progress_container">
                            <div class="progress_container_item" id="progress_three"></div>
                        </div>
                        <div>
                            <p id="three"><?php echo number_format((($count_three / $count) * 100), 1); ?>%</p>
                        </div>
                    </div>
    
                    <div class="rating_comment_container_item">
                        <div id="rating_comment_2"></div>
                        <div class="progress_container">
                            <div class="progress_container_item" id="progress_two"></div>
                        </div>
                        <div>
                            <p id="two"><?php echo number_format((($count_two / $count) * 100), 1); ?>%</p>
                        </div>
                    </div>
    
                    <div class="rating_comment_container_item">
                        <div id="rating_comment_1"></div>
                        <div class="progress_container">
                            <div class="progress_container_item" id="progress_one"></div>
                        </div>
                        <div>
                            <p id="one"><?php echo number_format((($count_one / $count) * 100), 1); ?>%</p>
                        </div>
                    </div>
                </div>
                <div class="form_container">
                    <p class="form_container_title">Залиште свій відгук:</p>
    
                    <div class="rating">
                        <div class="mark_container">
                            <p>Оцінка*</p>
                            <div id="form_rating"></div>
                        </div>
                        <p id="rate_err" class="error_alert">Необхідно поставити оцінку</p>
                    </div>
                
                    <div class="input__container">
                        <label>Ім’я *</label>
                        <input id="name_comment" type="text">
                        <p id="name_err" class="error_alert">Необхідно заповнити поле</p>
                    </div>

                    <div class="input__container">
                        <label>Прізвище *</label>
                        <input id="surname_comment" type="text">
                        <p id="surname_err" class="error_alert">Необхідно заповнити поле</p>
                    </div>
    
                    <div class="input__container">
                        <label>Коментар *</label>
                        <textarea id="text_comment"></textarea>
                        <p id="text_err" class="error_alert">Необхідно заповнити поле</p>
                    </div>      
    
                    <button id="btnCreateComment">Надіслати</button>
                    <p id="succ_form" class="success_alert">Коментар був успішно відправлений</p>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="600" class="col">
                
                <div class="comment">
                    <div id="data-container"></div>
                    <div style="margin-top:20px" id="pagination-demo"></div>  
                </div>
            </div>
        </div>
    </div>
</section>