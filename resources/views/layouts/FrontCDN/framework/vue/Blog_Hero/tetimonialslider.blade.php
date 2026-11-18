<section>

    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-12 mx-auto">

                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">


                    <div class="carousel-item" v-for="(MinItem,i) in  client_commentMin" :key="MinItem.id">
                        <div class="carousel-caption">

                            <img src="Front/IMG/IMG-20261030-WA0790.png" width='80px' height='50px'>


                            <H3 class="mb-lg-3">Adventure Reviews</H3>
                            <h2> @{{ MinItem.username }} </h2>
                            <h4 class="carousel-title">@{{ MinItem.Client_POST }}</h4>


                        </div>

                    </div>

                    <div class="carousel-item active" v-for="(MaxItem,i) in  client_commentMax" :key="MaxItem.id">
                        <div class="carousel-caption">

                            <img src="Front/IMG/IMG-20261030-WA0790.png" width='80px' height='50px'>



                            <H3 class="mb-lg-3">Adventure Reviews</H3>

                            <h2> @{{ MaxItem.username }} </h2>

                            <h4 class="carousel-title"> @{{ MaxItem.Client_POST }}</h4>


                        </div>
                    </div>


                </div>




                <form class="custom-form contact-form" action="{{ route('Frontclient_comment') }}" method="post"
                    role="form">
@csrf
                    {{--{{csrf_token()}}--}}
                                        @Method('Post')

                    <br />
                    <br />
                    <br /> <br />
                    <br />
                    <br />
                    <p class="mb-4">just leave your comment here
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="Yourname" id="Yourname" class="form-control"
                                placeholder="yourname:Jackdoe" required="">
                        </div>

                    </div>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                        placeholder="Jackdoe@gmail.com" required="">

                    <textarea name="comment" rows="5" class="form-control" id="message" placeholder="your comment"></textarea>

                    <button type="submit" class="form-control">Send Reviews</button>
                </form>


            </div>
        </div>
    </div>


</section>
