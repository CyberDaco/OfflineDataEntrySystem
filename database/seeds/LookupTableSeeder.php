<?php

use Illuminate\Database\Seeder;

use App\Lookup;

class LookupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Street Extenstions

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Street';
        $lookup->code = 'St';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Avenue';
        $lookup->code = 'Av';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Boulevard';
        $lookup->code = 'Bvd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Court';
        $lookup->code = 'Ct';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Crescent';
        $lookup->code = 'Cr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Drive';
        $lookup->code = 'Dr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Esplanade';
        $lookup->code = 'Esp';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Grove';
        $lookup->code = 'Gr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Highway';
        $lookup->code = 'Hwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Lane';
        $lookup->code = 'Lane';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Parade';
        $lookup->code = 'Pde';
        $lookup->save(); //90

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Place';
        $lookup->code = 'Pl';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Road';
        $lookup->code = 'Rd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Terrace';
        $lookup->code = 'Tce';
        $lookup->save();


        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Way';
        $lookup->code = 'Wy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Alleyway';
        $lookup->code = 'Alwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Arcade';
        $lookup->code = 'Arc';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Basin';
        $lookup->code = 'Basn';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Beach';
        $lookup->code = 'Bch';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Bend';
        $lookup->code = 'Bend';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Block';
        $lookup->code = 'Blk';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Bridge';
        $lookup->code = 'Bdge';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Broadway';
        $lookup->code = 'Bdwy';
        $lookup->save(); //10

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Bypass';
        $lookup->code = 'Bypa';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Byway';
        $lookup->code = 'Bywy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Causeway';
        $lookup->code = 'Caus';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Central';
        $lookup->code = 'Cn';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Centre';
        $lookup->code = 'Ctr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Centreway';
        $lookup->code = 'Cnwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Chase';
        $lookup->code = 'Ch';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Circle';
        $lookup->code = 'Cir';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Circuit';
        $lookup->code = 'Cct';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Close';
        $lookup->code = 'Cl';
        $lookup->save(); //20

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Concourse';
        $lookup->code = 'Con';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Corner';
        $lookup->code = 'Cnr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Courtyard';
        $lookup->code = 'Ctyd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Cove';
        $lookup->code = 'Cove';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Crest';
        $lookup->code = 'Crst';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Cross';
        $lookup->code = 'Crss';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Crossing';
        $lookup->code = 'Crsg';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Crossroad';
        $lookup->code = 'Crd';
        $lookup->save(); //30

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Crossway';
        $lookup->code = 'Cowy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Cul-De-Sac';
        $lookup->code = 'Cds';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Deviation';
        $lookup->code = 'Devn';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Dip';
        $lookup->code = 'Dip';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Distributor';
        $lookup->code = 'Dstr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Driveway';
        $lookup->code = 'Drwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Edge';
        $lookup->code = 'Edge';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Elbow';
        $lookup->code = 'Elb';
        $lookup->save(); //40

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'End';
        $lookup->code = 'End';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Entrance';
        $lookup->code = 'Ent';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Estate';
        $lookup->code = 'Est';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Expressway';
        $lookup->code = 'Exp';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Extension';
        $lookup->code = 'Ex';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Fairway';
        $lookup->code = 'Fawy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Fire Track';
        $lookup->code = 'Ftrk';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Firetrail';
        $lookup->code = 'Fit';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Flat';
        $lookup->code = 'Flat';
        $lookup->save(); //50

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Foreshore';
        $lookup->code = 'Fshr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Formation';
        $lookup->code = 'Form';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Freeway';
        $lookup->code = 'Fwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Front';
        $lookup->code = 'Frnt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Frontage';
        $lookup->code = 'Frtg';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Gap';
        $lookup->code = 'Gap';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Garden';
        $lookup->code = 'Gdn';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Gate';
        $lookup->code = 'Gte';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Gardens';
        $lookup->code = 'Gdns';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Glen';
        $lookup->code = 'Glen';
        $lookup->save(); //60

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Grange';
        $lookup->code = 'Gra';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Green';
        $lookup->code = 'Grn';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Ground';
        $lookup->code = 'Grnd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Gully';
        $lookup->code = 'Gly';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Heights';
        $lookup->code = 'Hts';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Highroad';
        $lookup->code = 'Hrd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Hill';
        $lookup->code = 'Hill';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Interchange';
        $lookup->code = 'Intg';
        $lookup->save(); //70

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Intersection';
        $lookup->code = 'Intn';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Junction';
        $lookup->code = 'Jnc';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Key';
        $lookup->code = 'Key';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Landing';
        $lookup->code = 'Ldg';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Laneway';
        $lookup->code = 'Lnwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Link';
        $lookup->code = 'Link';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Little';
        $lookup->code = 'Lt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Lookout';
        $lookup->code = 'Lkt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Loop';
        $lookup->code = 'Loop';
        $lookup->save(); //80

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Lower';
        $lookup->code = 'Lr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Mews';
        $lookup->code = 'Mews';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Motorway';
        $lookup->code = 'Mwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Mount';
        $lookup->code = 'Mt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Nook';
        $lookup->code = 'Nook';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Outlook';
        $lookup->code = 'Otlk';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Park';
        $lookup->code = 'Park';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Parklands';
        $lookup->code = 'Pkld';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Pathway';
        $lookup->code = 'Phwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Plateau';
        $lookup->code = 'Plat';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Plaza';
        $lookup->code = 'Plza';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Pocket';
        $lookup->code = 'Pkt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Point';
        $lookup->code = 'Pnt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Port';
        $lookup->code = 'Port';
        $lookup->save(); //100

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Promenade';
        $lookup->code = 'Prom';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Quad';
        $lookup->code = 'Quad';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Quadrangle';
        $lookup->code = 'Qdgl';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Quadrant';
        $lookup->code = 'Qdrt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Quay';
        $lookup->code = 'Qy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Quays';
        $lookup->code = 'Qys';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Ramble';
        $lookup->code = 'Rmbl';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Range';
        $lookup->code = 'Rnge';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Reach';
        $lookup->code = 'Rch';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Reserve';
        $lookup->code = 'Res';
        $lookup->save(); //110

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Retreat';
        $lookup->code = 'Rtt';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Ridge';
        $lookup->code = 'Rdge';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Ridgeway';
        $lookup->code = 'Rgwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Right of Way';
        $lookup->code = 'Rowy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'River';
        $lookup->code = 'Rvr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Riverway';
        $lookup->code = 'Rvwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Riviera';
        $lookup->code = 'Rvra';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Ridge';
        $lookup->code = 'Rdge';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Roads';
        $lookup->code = 'Rds';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Roadside';
        $lookup->code = 'Rdsd';
        $lookup->save(); //120

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Roadway';
        $lookup->code = 'Rdwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Ronde';
        $lookup->code = 'Rnde';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Rosebowl';
        $lookup->code = 'Rsbl';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Rotary';
        $lookup->code = 'Rty';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Round';
        $lookup->code = 'Rnd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Route';
        $lookup->code = 'Rte';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Run';
        $lookup->code = 'Run';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Service Way';
        $lookup->code = 'Swy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Siding';
        $lookup->code = 'Sdng';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Slope';
        $lookup->code = 'Slpe';
        $lookup->save(); //130

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Sound';
        $lookup->code = 'Snd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Square';
        $lookup->code = 'Sq';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'State Highway';
        $lookup->code = 'Shwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Strand';
        $lookup->code = 'Stra';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Strip';
        $lookup->code = 'Strp';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Subway';
        $lookup->code = 'Sbwy';
        $lookup->save(); //140

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Thoroughfare';
        $lookup->code = 'Thor';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Tollway';
        $lookup->code = 'Tlwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Towers';
        $lookup->code = 'Twrs';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Track';
        $lookup->code = 'Trk';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Trail';
        $lookup->code = 'Trl';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Trailer';
        $lookup->code = 'Trlr';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Triangle';
        $lookup->code = 'Tri';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Trunkway';
        $lookup->code = 'Tkwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Turn';
        $lookup->code = 'Turn';
        $lookup->save(); //150

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Underpass';
        $lookup->code = 'Upas';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Vale';
        $lookup->code = 'Vale';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Viaduct';
        $lookup->code = 'Vdct';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Villas';
        $lookup->code = 'Vlls';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Vista';
        $lookup->code = 'Vsta';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Walk';
        $lookup->code = 'Walk';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Walkway';
        $lookup->code = 'Wkwy';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Wharf';
        $lookup->code = 'Whrf';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Wynd';
        $lookup->code = 'Wynd';
        $lookup->save();

        $lookup = new Lookup();
        $lookup->filter = 'street_extension';
        $lookup->name = 'Yard';
        $lookup->code = 'Yard';
        $lookup->save();
        

    //PROPERTY TYPE NEWS
    
        //HOUSE
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE';
        $lookup->code = 'HO';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - ONE STOREY / LOWSET';
        $lookup->code = 'HO,10';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - TWO STOREY / HIGHSET';
        $lookup->code = 'HO,20';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - MULTI STOREY';
        $lookup->code = 'HO,50';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - ACREAGE';
        $lookup->code = 'HO,60';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - DUAL OCCUPANCY';
        $lookup->code = 'HO,70';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - SEMI DETACHED';
        $lookup->code = 'HO,80';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - DUPLEX';
        $lookup->code = 'HO,85';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'HOUSE - TERRACE';
        $lookup->code = 'HO,90';
        $lookup->save();
        
        //UNIT
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT';
        $lookup->code = 'UN';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - TOWNHOUSE / VILLA';
        $lookup->code = 'UN,10';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - LOWRISE';
        $lookup->code = 'UN,20';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - HIGHRISE';
        $lookup->code = 'UN,30';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - PENTHOUSE';
        $lookup->code = 'UN,40';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - TRIPLEX';
        $lookup->code = 'UN,50';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - QUADRUPLEX';
        $lookup->code = 'UN,60';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'UNIT - STUDIO';
        $lookup->code = 'UN,70';
        $lookup->save();
        
        //COMMERCIAL
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'COMMERCIAL';
        $lookup->code = 'CO';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'COMMERCIAL - RETAIL BUILDING';
        $lookup->code = 'CO,30';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'COMMERCIAL - OFFICE BUILDING';
        $lookup->code = 'CO,50';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'COMMERCIAL - INDUSTRIAL BUILDING';
        $lookup->code = 'CO,70';
        $lookup->save();
        
        //LAND
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND';
        $lookup->code = 'LA';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - RESIDENTIAL HOUSE';
        $lookup->code = 'LA,10';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - RESIDENTIAL ACREAGE';
        $lookup->code = 'LA,20';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - RURAL ACREAGE';
        $lookup->code = 'LA,30';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - RESIDENTIAL DEVELOPMENT';
        $lookup->code = 'LA,50';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - OFFICE / RETAIL';
        $lookup->code = 'LA,60';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - INDUSTRIAL';
        $lookup->code = 'LA,65';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - PARKS / RESERVES';
        $lookup->code = 'LA,70';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'LAND - GOVERNMENT';
        $lookup->code = 'LA,85';
        $lookup->save();
        
        //FARM
        $lookup = new Lookup();
        $lookup->filter = 'property_type';
        $lookup->name = 'FARM / RURAL';
        $lookup->code = 'FA';
        $lookup->save();
        
    //SALE TYPE NEWS
    
        $lookup = new Lookup();
        $lookup->filter = 'listing_type';
        $lookup->name = 'AUCTION';
        $lookup->code = 'A';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'listing_type';
        $lookup->name = 'MORTGAGEE SALE';
        $lookup->code = 'M';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'listing_type';
        $lookup->name = 'MORTGAGEE AUCTION';
        $lookup->code = 'MA';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'listing_type';
        $lookup->name = 'NORMAL SALE';
        $lookup->code = 'S';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'listing_type';
        $lookup->name = 'TENDER';
        $lookup->code = 'T';
        $lookup->save();
        
        $lookup = new Lookup();
        $lookup->filter = 'listing_type';
        $lookup->name = 'OTHER';
        $lookup->code = 'O';
        $lookup->save();

    }
}
