<?php
namespace App\Http\Controllers;

class V7Controller extends Controller
{
  public function index()
  {
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'UFC Conor McGregor-Georges Saint-Pierre superfight possible, Dana White',
        'https://cdn.vox-cdn.com/thumbor/BVEbWJfs0UTW21vfIjhqJYthDwU=/0x0:1100x733/1200x800/filters:focal(329x22:505x198)/cdn.vox-cdn.com/uploads/chorus_image/image/54691151/320_Georges_St-Pierre_vs_Johny_Hendricks.1384671336.0.jpg',
      ),
      
      array(
        'UFC to relocate Darren Till-headlined Fight Night to England',
        'https://images.tapology.com/letterbox_images/37393/default/Darren-Till.jpg?1439481372',
      ),
			
			array(
        'Darren Till and Gunnar Nelson Have a Nice Chat Agreeing to Fight Each Other',
        'http://www.bjpenn.com/wp-content/uploads/2017/11/aGunnarTill.jpg.pagespeed.ic.UM98lz0irS.webp',
      )
    );
      
    return view('verk7/posts.index', compact('persons'));
    
    //return view('verk7/posts.show', compact('persons', 'id'));
  }
  
  public function show($id)
  {
    
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'UFC boss Dana White addresses potential McGregor-GSP superfight',
        'https://cdn.images.express.co.uk/img/dynamic/167/590x/Conor-McGregor-Georges-St-Pierre-877158.jpg',
        'DANA White has refused to rule out a future showdown between the two biggest athletes to ever fight in the octagon.<br><br>
The UFC boss’s admission he would entertain a fight between lightweight champion Conor McGregor and new middleweight champion Georges St-Pierre has sent UFC fans into meltdown.
It comes after St-Pierre on Sunday made a blockbuster return to the octagon by submitting former champion Michael Bisping in the UFC 217 main event.
The 36-year-old mixed martial arts icon has an uncertain future, despite admitting on Friday (AEDT) that his contract dictates that his next fight will be against interim middleweight champion Robert Whittaker.<br><br>
The UFC has already announced Whittaker will likely headline UFC 221 in Perth in February — leading to speculation the Canadian superstar will dodge the fight in order to seek out a more lucrative fight against a UFC star with greater global pay-per-view appeal than the 26-year-old Aussie.
St-Pierre was unable to attend his post-fight press conference after UFC 217 because he needed to be treated in hospital.'
      ),
      
      array(
        'UFC to relocate Darren Till-headlined Fight Night to England',
        'https://cdn.vox-cdn.com/thumbor/umXo9DdfEI1q65-ODC_MIYPgmC8=/0x0:3347x2234/1200x800/filters:focal(1816x329:2350x863)/cdn.vox-cdn.com/uploads/chorus_image/image/57181619/usa_today_10254275.0.jpg',
        "The UFC is planning to relocate a February event from Orlando, Florida, to England, so Liverpudlian welterweight Darren Till can headline in his home country.<br><br>

UFC president Dana White revealed the news during a public appearance Tuesday, according to the Los Angeles Times.<br><br>

According to White, Till (16-0-1) will face two-time title challenger Stephen Thompson at UFC Fight Night on Feb. 24. White did not reveal an official venue.<br><br>

It's a clear indication what the promotion thinks of Till. The 24-year-old is coming off a first-round knockout over Donald Cerrone last month in Poland.
<br><br>
Till has already drawn comparisons to Conor McGregor, the UFC's outspoken and hard-hitting Irish champion."
      ),
			
			array(
        'Darren Till and Gunnar Nelson Have a Nice Chat Agreeing to Fight Each Other',
        'http://www.bjpenn.com/wp-content/uploads/2017/11/GunnarTill.jpg',
        'Darren Till’s hype is like a meteor after finishing Cowboy Cerrone at UFC Gdansk, but what good is momentum if the guy can’t get a fight? Mike Perry and Till had their screaming match after the fight, but he’s booked for the time being. Our hearts skipped a beat when Dana White announced Stephen ‘Wonderboy’ Thompson and Till were going to scrap, but Thompson quickly squashed the news. It was frustrating enough for Darren Till to post that the welterweight division is all running scared, which led none other than Gunnar Nelson to chime in.')
    );
    return view('verk7/posts.show', compact('persons', 'id'));
  }
}