<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('zoom.css')}}">
    <title>Zoom sur {{$film->titre}}</title>
</head>
<body>
<div class="movie-card">
  
  <div class="container">
    
    <img src="{{$film->pochette_url}}" alt="cover" class="cover" />
        
    <div class="hero">
            
      <div class="details">
      
        <div class="title1">{{$film->titre}}<span>{{$film->notation}}</span></div>

        <div class="title2">{{$film->annee_de_production}}</div>    
        
        <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" checked /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
  </fieldset>
        
        <span class="likes">{{$film->cote}}</span>
        
      </div> <!-- end details -->
      
    </div> <!-- end hero -->
    
    <div class="description">
      
      <div class="column1">
      @if (count($film->genres))
                            @foreach ($film->genres as $genre)
                                <span>{{ $genre->titre }}</span>
                            @endforeach
                        @else
                            <p>Il ny a aucun acteur.</p>
                        @endif
      </div> <!-- end column1 -->
      
      <div class="column2">
        
        <p>{{$film->resume}}</p>
        
        <div class="avatars">
          <a href="#" data-tooltip="Person 1" data-placement="top">
            <img src="{{$film->realisateur->photo}}" alt="avatar1" />
          </a>
          
          <a href="#" data-tooltip="Person 2" data-placement="top">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar2.png" alt="avatar2" />
          </a>
          
          
          <a href="#" data-tooltip="Person 3" data-placement="top">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar3.png" alt="avatar3" />
          </a>
          
        </div> <!-- end avatars -->
        
        
        
      </div> <!-- end column2 -->
    </div> <!-- end description -->
    
   
  </div> <!-- end container -->
</div> <!-- end movie-card -->
</body>
</html>