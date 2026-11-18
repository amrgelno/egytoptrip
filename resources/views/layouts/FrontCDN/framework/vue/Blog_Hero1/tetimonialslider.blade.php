<section class="testimonial-section section-padding section-bg">
    <div class="container">
        <div class="row">


            <div class="col-lg-8 col-12 mx-auto">
                <h4 class="mb-lg-3">Happy Customers</h4>

                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                    <div class="carousel-item" v-for="(MinItem,i) in  client_commentMin" :key="i">
                        <div class="carousel-caption">
                            <h2> @{{ MinItem.username }} </h2>
                            <h4 class="carousel-title">@{{ MinItem.Client_POST }}</h4>


                        </div>

                    </div>

                    <div class="carousel-item active" v-for="(MaxItem,i) in  client_commentMax" :key="i">
                        <div class="carousel-caption">

                            <h2> @{{ MaxItem.username }} </h2>

                            <h4 class="carousel-title"> @{{ MaxItem.Client_POST }}</h4>


                        </div>
                    </div>


                </div>




                <form class="custom-form contact-form" action="{{ route('Frontclient_comment') }}" method="post"
                    role="form">

                    @csrf
                    <br />
                    <br />
                    <br /> <br />
                    <br />
                    <br />
                    <p class="mb-4">just leave your comment here
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="Yourname" id="email" class="form-control"
                                placeholder="yourname:Jackdoe" required="">
                        </div>

                    </div>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                        placeholder="Jackdoe@gmail.com" required="">

                    <textarea name="comment" rows="5" class="form-control" id="message" placeholder="your comment"></textarea>

                    <button type="submit" class="form-control">Send comment</button>
                </form>








            </div>
        </div>
    </div>


</section>
