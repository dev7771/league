


<div class="row col-md-6">

	<div class="row" >

		<select wire:model="weekId" wire:select="changeWeek" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
		  <option selected>Select week</option>
		   @foreach($weeks as $week)
			  <option value="{{$week->id}}">{{$week->name}}</option>
		   @endforeach
		</select>

		<button wire:click="filter">Filter {{$count}}</button>
	</div>
	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th colspan="3" scope="col" >Laague Table</th>
	    </tr>
	    <tr>
	      <th scope="row">Teams</th>
	      <td>PTS</td>
	      <td>P</td>
	      <td>W</td>
	      <td>D</td>
	      <td>L</td>
	      <td>GF</td>
	      <td>GA</td>
	      <td>GD</td>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($teamResults as $result)
	    <tr>
	      <th scope="row">{{$result->team->name}}</th>
	      <td>{{$result->points}}</td>
	      <td>{{$result->played}}</td>
	      <td>{{$result->won}}</td>
	      <td>{{$result->draw}}</td>
	      <td>{{$result->lost}}</td>
	      <td>{{$result->gf}}</td>
	      <td>{{$result->ga}}</td>
	      <td>{{$result->gd}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
 
<div class="row col-md-6">
	<table class="table table-dark">
		<thead>
			<th># Week mathces are there</th>
		</thead>
		<tbody>
			@foreach($matches as $match)
			<tr>
				<td>{{$match->firstTeam->name}}</td> 
				<td>{{ $match->f_player_gaols . '-' . $match->s_player_gaols }}</td>
				<td>{{$match->secondTeam->name}}</td> 
			</tr>
			@endforeach
		</tbody>
	</table>
</div>