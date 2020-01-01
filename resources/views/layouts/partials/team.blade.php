<center>
    <h1>Meet the Team</h1>
</center><br>
<div class="row">
    @foreach($team as $member)
        <div class="col-md-4">
            <div class="team">
                <center>
                    <img src="{{ $member->photo }}" class="teamPic rounded-circle"><br><br>
                    <h4>{{ $member->name }}</h4>
                    <span class="socialIcons">
                        <i class="fab fa-facebook"></i>&nbsp;
                        <i class="fab fa-twitter"></i>&nbsp;
                        <i class="fab fa-instagram"></i>&nbsp;
                    </span><br>
                    <a href="{{ route('bio', $member) }}" class="bioLink">View Biography</a>
                </center>
            </div>
        </div>
    @endforeach
</div>