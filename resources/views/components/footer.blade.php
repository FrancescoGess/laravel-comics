<div class="footer-contact">
    <div class="flex-elements">
        <div class="container-btn">
            <button>
                <a href="#">sign up now!</a>
            </button>
        </div>
        <div class="container-social">
            <div class="flex-social">
                <span>
                    follow us
                </span>
                    <figure>
                        <a href=""><img src="{{ Vite::asset('resources/img/images/footer-facebook.png') }}" alt="facebook"></a>
                    </figure>
                    <figure>
                        <a href=""><img src="{{ Vite::asset('resources/img/images/footer-twitter.png') }}" alt="twitter"></a>
                    </figure>
                    <figure>
                        <a href=""><img src="{{ Vite::asset('resources/img/images/footer-youtube.png') }}"alt="youtube"></a>
                    </figure>
                    <figure>
                        <a href=""><img src="{{ Vite::asset('resources/img/images/footer-pinterest.png') }}" alt="pinterest"></a>
                    </figure>
                    <figure>
                        <a href=""><img src="{{ Vite::asset('resources/img/images/footer-periscope.png') }}" alt="periscope"></a>
                    </figure>                
            </div>
        </div>
    </div>
</div>


<style>

    .footer-contact{
        background-color: #303030;
        width: 100%;
        height: 139px;
    }

    .flex-elements{
        width: 70%;
        height: 70%;
        padding-top: 50px;
        margin: 0 auto;

        display: flex;
        justify-content: space-between;
    }

    .container-btn{
        width: 150px;
        
        button{
            width: 100%;
            height: 50%;
            
            color: black;
            border: 2px solid #0282F9;

            background-color:  #303030;
        }
        a{
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            padding: 10px;
        }
    }

    .container-social{
        width: 35%;

        .flex-social{
            display: flex;
            align-items: center;

            gap: 15px;
        }

        span{
            text-transform: uppercase;
            font-weight: bold;
            color: #0677d4;
        }
    }


</style>
