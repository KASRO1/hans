@include("elements.head")
@include("elements.header")
@include("elements.footer")
    <!DOCTYPE html>
<html lang="en">
@yield("head")
<body>

@yield("header")
<div class="container">
    <div id="advantages-block-main" class="advantages-block">
        <div class="advantages-block__item">
            <img src="img/icon/advantages/i_photo.svg" alt="photo"
                 class="advantages-block__item__img">
            <span class="advantages-block__item__text-title">
                        500+
                    </span>
            <span class="advantages-block__item__text">
                        hot photos
                    </span>
        </div>
        <div class="advantages-block__item">
            <img src="img/icon/advantages/i_video.svg" alt="video"
                 class="advantages-block__item__img">
            <span class="advantages-block__item__text-title">
                        350+
                    </span>
            <span class="advantages-block__item__text">
                        hot VIDEOS
                    </span>
        </div>
        <div class="advantages-block__item">
            <img src="img/icon/advantages/i_4k.svg" alt="4k"
                 class="advantages-block__item__img">
            <span class="advantages-block__item__text-title">
                        50+
                    </span>
            <span class="advantages-block__item__text">
                        FULL VIDEOS
                    </span>
        </div>
        <div class="advantages-block__item">
            <img src="img/icon/advantages/i_dick.svg" alt="DICK RATE"
                 class="advantages-block__item__img">
            <span class="advantages-block__item__text-title">
                        DICK RATE
                    </span>
            <span class="advantages-block__item__text">
                        FAST & DETAIL
                    </span>
        </div>
        <div class="advantages-block__item">
            <img src="img/icon/advantages/i_chat.svg" alt="SEX CHAT"
                 class="advantages-block__item__img">
            <span class="advantages-block__item__text-title">
                        SEX CHAT
                    </span>
            <span class="advantages-block__item__text">
                        WITH GRETTEL
                    </span>
        </div>
    </div>
</div>

<div class="container" id="videoSection">
    <div class="videos-block main-videos-block">
        @foreach($videos as $video)

            <a href="{{route("video:id", $video['id'])}}"
               class="videos-block-item videos-block-item__premium">
                <img src="/storage/{{$video['path_preview']}}" alt="video"
                     class="videos-block-item__img">

                <span class="videos-block-item__label">
                        PREMIUM
                    </span>

                <div class="videos-block-item__row">
                    <div class="videos-block-item__row__name">
                        <h4 class="videos-block-item__title">
                            {{$video['title']}}
                        </h4>

                        <p class="videos-block-item__category">
                            DEEP
                        </p>
                    </div>

                    <span class="videos-block-item__time">
                            {{\Carbon\Carbon::parse($video['created_at'])->format("d.m.Y")}}
                        </span>
                </div>
            </a>
        @endforeach
    </div>

    <button class="btn-videos-block-show-more">
        show more
    </button>

</div>

@yield("footer")
<script
    src="https://unpkg.com/scrollbooster@2/dist/scrollbooster.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
