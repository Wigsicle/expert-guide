<script src="https://kit.fontawesome.com/d6a36940dc.js" crossorigin="anonymous"></script> <!--For rating system -->
<!--Rating System-->
<div style="padding: 15px;">
                <h4>Leave Us A Rating!</h4>
                <i class="fa fa-star fa-2x" data-index="0"></i>
                <i class="fa fa-star fa-2x" data-index="1"></i>
                <i class="fa fa-star fa-2x" data-index="2"></i>
                <i class="fa fa-star fa-2x" data-index="3"></i>
                <i class="fa fa-star fa-2x" data-index="4"></i>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <!--For rating system -->
                <script>
                    var ratedIndex = -1, uID = 0;

                    $(document).ready(function () {
                        resetStarColors();

                        if (localStorage.getItem('ratedIndex') != null) {
                            setStars(parseInt(localStorage.getItem('ratedIndex')));
                            uID = localStorage.getItem('uID');
                        }
                        
                        $('.fa-star').on('click', function () {
                            ratedIndex = parseInt($(this).data('index'));
                            localStorage.setItem('ratedIndex', ratedIndex);
                            saveToTheDB();
                        });

                        $('.fa-star').mouseover(function () {
                            resetStarColors();
                            var currentIndex = parseInt($(this).data('index'));
                            setStars(currentIndex);
                        });
                        $('.fa-star').mouseleave(function () {
                            resetStarColors();

                            if (ratedIndex != -1)
                                setStars(ratedIndex);
                        });
                    });

                    function saveToTheDB() {
                        $.ajax({
                            url: "contactus.php",
                            method: "POST",
                            dataType: 'json',
                            data: {
                                save: 1,
                                uID: uID,
                                ratedIndex: ratedIndex
                            }, success: function (r) {
                                uID = r.id;
                                localStorage.setItem('uID', uID);
                            }
                        });
                    }

                    function setStars(max) {
                        for (var i = 0; i <= max; i++)
                                    $('.fa-star:eq('+i+')').css('color', 'green');
                    }

                    function resetStarColors() {
                        $('.fa-star').css('color', "grey");
                    }
                </script>