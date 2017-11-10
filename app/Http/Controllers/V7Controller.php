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
        'Abel Makkonen Tesfaye, known professionally as The Weeknd, is a Canadian singer, songwriter, and record producer. In late 2010, Tesfaye anonymously uploaded several songs to YouTube under the name "The Weeknd"',
      ),
      
      array(
        'UFC to relocate Darren Till-headlined Fight Night to England',
        'https://images.tapology.com/letterbox_images/37393/default/Darren-Till.jpg?1439481372',
        'Aubrey Drake Graham is a Canadian rapper, singer, songwriter, record producer, actor, and entrepreneur. Drake initially gained recognition as an actor on the teen drama television series Degrassi: The Next Generation in the early 2000s.',
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
        'Abel Makkonen Tesfaye, known professionally as The Weeknd, is a Canadian singer, songwriter, and record producer. In late 2010, Tesfaye anonymously uploaded several songs to YouTube under the name "The Weeknd"',
        'February 16, 1990',
        'Canada'
      ),
      
      array(
        'UFC to relocate Darren Till-headlined Fight Night to England',
        'https://images.tapology.com/letterbox_images/37393/default/Darren-Till.jpg?1439481372',
        'Aubrey Drake Graham is a Canadian rapper, singer, songwriter, record producer, actor, and entrepreneur. Drake initially gained recognition as an actor on the teen drama television series Degrassi: The Next Generation in the early 2000s.',
        'October 24, 1986',
        'Canada'
      )
    );
    return view('verk7/posts.show', compact('persons', 'id'));
  }
}