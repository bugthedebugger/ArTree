@extends('layouts.artree')

@section('body')

<div class="container">
    <div class="page">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <h1 class="blogTitle">Dhaka Art Summit - 2018</h1><br>
                    <table class="table table-borderless table-sm arteeTable">
                        <tr>
                            <td><i class="fal fa-calendar"></i>&nbsp;</td>
                            <td class="someSpace">27th oct 2019</td>
                        </tr>
                        <tr>
                            <td><i class="fal fa-map-marker"></i>&nbsp;</td>
                            <td class="someSpace">Samarpan Marg, Tripureshore</td>
                        </tr>
                        <tr>
                            <td><div class="fal fa-eye"></div>&nbsp;</td>
                            <td class="someSpace">15 min read</td>
                        </tr>
                    </table><br>
                    <div class="aboutTagline">
                        <i class="fas fa-quote-left"></i>
                        <p>
                            ArtTree projects explore a multitude of identities, cultures, and dynamics with strategic grassroots interventions and a goal of shaping emerging communities. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div>
                    <div id="demo" class="carousel slide arteeCaro" data-ride="carousel">   
                        
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="images/project.png">
                            </div>
                            <div class="carousel-item">
                            <img src="images/project.png">
                            </div>
                            <div class="carousel-item">
                            <img src="images/project.png">
                            </div>
                        </div>
                        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="fal fa-arrow-left"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="fal fa-arrow-right"></span>
                        </a>
                    </div><br>
                    <button class="btn btn-artee float-right">View Album</button>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="blogBookmark">
                    <i class="fal fa-bookmark share"></i>
                    <i class="fab fa-twitter share"></i>
                    <i class="fab fa-facebook share"></i>
                </div>
            </div>
            <div class="col-md-8">
                <div style="text-align:justify">
                    <strong>"My Great- Great- Grandmother’s Shawl" - Sheelasha Rajbhandari</strong><br><br>
                    <p>
                            Global clothing and textiles exports is one of the world’s most traded manufactured products.Since late 20th century much production of textile & clothing shifted from developed to developing world specially to countries like China and India.Consequently extremely low priced,mass manufactured,counterfeited garments became more accessible and popular in many countries including Nepal.Which also rapidly destroyed local indigenous textile & clothing cultures. Textile was one of the major export of Nepal . Textile from Nepal has been documented from as far as 3rd century BC in the book Arthashastra . Nepal have more than 125 different ethnic communities and almost all the communities have their own clothing ,textile culture .They used to have different groups who would professionally work as weavers , tailor , dyers , spinners etc. Even till 1960s people generally would wove and sewed clothes for themselves or wore handmade clothes. From 1996 - 2006 Nepal officially went through civil war which claimed lives of thousands. Thousands of large and small local industries shut down, people discontinued their traditional practices , millions of people migrated to seek better works . Although throughout the history, Nepal 's one of the best exports have been garments and textiles , general Nepali people started to loose their connection with it. Whereas usage of ethnic garments got limited to rituals and ceremonies

                            <br><br>The performative art work ‘My great -great - grandmother’s shawl , is about this enormous change Nepal is going through in short period of time, which also reflects the change happening around the world . Here Sheelasha is portraying this change by tracing back five generation of her family’s clothing culture . For the work she took the reference of her maternal great- great- grandmother Purna Kumari Vaidhya's photograph . Purna Kumari who was born about 127 years ago is wearing a shawl named ‘Damber Kumari’ in the photograph . Damber Kumari is three layered shawl , the middle part is hand printed cotton, sandwiched by two layers of the fine sheer muslin. The shawl is named after the daughter of Jang Bahadur Rana ( founder of the Rana regime of Nepal) who brought India’s Banaras’s style block printing art to Kathmandu in mid- 1800s . It is said that Kathmandu’s winter was much colder , therefore she wrapped the block printed cotton by sheer muslin so the shawl could be warm and beautiful pattern beneath can also be seen. This shawl quickly gained popularity .The Ranjitkars , a caste who is concerned with the dyeing of clothes as well as other color related activities mostly continued this block printing technique. Later the shawl also got the name as ‘Nakali Dhaka’ or fake Dhaka shawl , as the prints imitated Dhaka textile’s pattern ( Dhaka is traditional handmade textile of the indigenous Limbu people of eastern Nepal.) However nowadays almost all the Damber Kumari shawls are machine printed.
                            
                            <br><br>Based on the pattern of the shawl on the photograph, Sheelasha recreated two Damber Kumari shawls. She took the photograph of her late grandmother Chiniya Bijukche who was 77 years old , wearing one of the Shawl. During Chiniya’s time the tradition of clothing and textile had not changed much although some textiles from India and very few from China were available. Sheelasha collected tags of mass produced clothes from around 100 people, most of them are counterfeited brands from India and China, then sewed the tags almost entirely covered the second shawl. She wore the tags covered Damber Kumari Shawl and captured it in the photograph . By 29 years old Sheelasha’ generation the textile culture has changed dramatically . The ethnic diversity in textile has flattened by mass produced readymades , hand mades replaced by machine mades , domestic industry are mainly export oriented, development of consumer culture contributing to higher import of clothing and textile. Increasing demand for mega branded wears at the same time acceptance of counterfeiting culture.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection