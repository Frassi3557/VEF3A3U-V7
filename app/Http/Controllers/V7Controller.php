<?php
namespace App\Http\Controllers;

class V7Controller extends Controller
{
  public function index()
  {
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'UFC Conor McGregor-Georges Saint-Pierre superfight possible',
        'https://cdn.vox-cdn.com/thumbor/BVEbWJfs0UTW21vfIjhqJYthDwU=/0x0:1100x733/1200x800/filters:focal(329x22:505x198)/cdn.vox-cdn.com/uploads/chorus_image/image/54691151/320_Georges_St-Pierre_vs_Johny_Hendricks.1384671336.0.jpg',
      ),
      
      array(
        'UFC to relocate Darren Till-headlined Fight Night to England',
        'https://themaclife.com/wp-content/uploads/2017/10/Darren-Till-Weigh-In-Gdansk.jpg',
      ),
			
			array(
        'Darren Till and Gunnar Nelson Have a Nice Chat Agreeing to Fight Each Other',
        'https://cdn.vox-cdn.com/thumbor/J6zUqzcTYPsSX7HrxR1QjSP0sus=/0x0:1200x800/1200x800/filters:focal(566x82:758x274)/cdn.vox-cdn.com/uploads/chorus_image/image/53763135/037_Gunnar_Nelson_vs_Brandon_Thatch.0.0.jpg',
      ),
			
			array(
        'Five Viking will fight on Fight Star Championship 13 in London this December',
        "http://mmafrettir.is/wp-content/uploads/2016/07/bjarki-%C3%BE%C3%B3r-paulsson.jpg",
      ),
			
			array(
        'Francis Ngannou knocks out Alistair Overeem at UFC 218',
        "https://img.bleacherreport.net/img/images/photos/003/711/187/hi-res-449951696485a7a1f87edbc2112921c6_crop_north.jpg?h=533&w=800&q=70&crop_x=center&crop_y=top",
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
        'Darren Till’s hype is like a meteor after finishing Cowboy Cerrone at UFC Gdansk, but what good is momentum if the guy can’t get a fight? Mike Perry and Till had their screaming match after the fight, but he’s booked for the time being. Our hearts skipped a beat when Dana White announced Stephen ‘Wonderboy’ Thompson and Till were going to scrap, but Thompson quickly squashed the news. It was frustrating enough for Darren Till to post that the welterweight division is all running scared, which led none other than Gunnar Nelson to chime in.'),
			
			array(
        'Five Vikings will fight at Fightstar 13',
        'http://mmafrettir.is/wp-content/uploads/2017/12/Screen-Shot-2017-12-05-at-20.50.25.png',
        'Það verður nóg um að vera um helgina fyrir bardagaaðadáendur á Íslandi. FightStar 13 bardagakvöldið fer þá fram í London um helgina þar sem fimm Íslendingar berjast.<br><br>Bjarki Þór Pálsson, Bjarki Ómarsson og Ingþór Örn Valdimarsson berjast allir atvinnubardaga en Bjarki Þór er í aðalbardaga kvöldsins.<br><br>Jeremy Aclipen fékk staðfestan bardaga í gær og kemur inn í stað bardagamanns sem meiddist. Bardaginn fer fram í 68 kg hentivigt en Jeremy fékk símtalið í gærmorgun (mánudag). Hann fær því skamman fyrirvara fyrir sinn fyrsta bardaga en var ekki lengi að segja já þegar símtalið barst. Þá er Bjartur Guðlaugsson einnig í áhugamannabardaga rétt eins og Jeremy.'),
			
			array(
        'Francis Ngannou knocks out Alistair Overeem at UFC 218',
        'https://img.bleacherreport.net/img/images/photos/003/711/187/hi-res-449951696485a7a1f87edbc2112921c6_crop_north.jpg?h=533&w=800&q=70&crop_x=center&crop_y=top',
        "Francis Ngannou took a huge step toward proving he's the future of the heavyweight division with a first-round knockout victory over Alistair Overeem in the co-main event of UFC 218 at Little Caesars Arena in Detroit.<br><br>The Reem came out trying to clinch with Ngannou—a good idea given the incredible power Ngannou possesses. However, the hulking heavyweight was able to flip position and trap Overeem against the cage.<br><br>After some stalling against the cage, referee Dan Miragliotta decided to separate the two. That was bad news for Overeem. Ngannou unleashed a massive left hook that instantly turned out the lights and announced himself as one of the most dangerous men in the division.")
    );
    return view('verk7/posts.show', compact('persons', 'id'));
  }
}