<?php

use yii\db\Migration;

/**
 * Class m231217_132650_data
 */
class m231217_132650_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('set', ['id'=>1, 'about'=>'drzewiecki']);
        $this->insert('set', ['id'=>2, 'about'=>'szczepanik']);
        $this->insert('set', ['id'=>3, 'about'=>'czochralski']);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki urodził się w 1844 roku w Kunce na Podolu.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki był inżynierem i wynalazcą.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki był pionierem żeglugi podwodnej.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki zbudował pierwszy w świecie okręt podwodny.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki zbudował pierwszy w świecie okręt podwodny z napędem elektrycznym.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki zbudował pierwszy w świecie okręt podwodny z wyrzutniami torpedowymi.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki pracował dla marynarki wojennej Rosji.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki pracował dla marynarki wojennej Francji.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki zmarł w 1938 roku w Paryżu.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki był autorem wielu innych wynalazków, oprócz tych związanych z żeglugą podwodną.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki był członkiem Komitetu Technicznego Marynarki Rosyjskiej.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki został odznaczony Orderem Św. Jerzego IV klasy.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Prototyp łodzi podwodnej Stefana Drzewieckiego był napędzany siłą mięśni ludzkich.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Okręty podwodne zaprojektowane przez Stefana Drzewieckiego były wyposażone w peryskop.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki był twórcą wyrzutni torpedowych.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki otrzymał prestiżowe odznaczenie „The Naval Architect of Great Britain".', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki był przeciwnikiem wojny.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Stefan Drzewiecki jest uważany za jednego z najwybitniejszych polskich wynalazców.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Wynalazki Stefana Drzewieckiego miały wpływ na rozwój techniki wojskowej.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>1, 'question'=>'Wynalazki Stefana Drzewieckiego miały wpływ na rozwój techniki cywilnej.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik pracował jako nauczyciel w szkołach ludowych.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jego pierwsze wynalazki dotyczyły dziedziny tkactwa.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik miał trudności finansowe podczas swojego pobytu w Wiedniu.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'W 1902 roku Jan Szczepanik ożenił się z Wandą Dzikowską.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jego wynalazki w dziedzinie fotografii zostały wykorzystane przez firmę Kodak.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik skonstruował pierwszą na świecie kamizelkę kuloodporną.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Mark Twain zamierzał kupić patenty wynalazków Jana Szczepanika.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik nie chciał przyjąć Orderu św. Anny od cara rosyjskiego.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jeden z synów Jana Szczepanika, Bogusław, został zamordowany przez Niemców podczas wojny.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik zmarł w Tarnowie w 1926 roku.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'W 1907 roku, podczas pobytu w Skrzyszowie, utopił się syn Jana Szczepanika, Andrzej.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik był właścicielem zakładu produkującego urządzenia telekomunikacyjne w Fałenicy.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik był znany jako "polski Edison".', 'correct'=>false]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik miał trudności ze sprzedażą swoich wynalazków ze względu na brak zainteresowania ze strony potencjalnych nabywców.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik miał pracownię w Berlinie, gdzie ciężko chorował na raka wątroby.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Jan Szczepanik został pochowany na miejscowym cmentarzu w rodzinnej miejscowości Dzikowskich.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>2, 'question'=>'Fundacja im. Jana Szczepanika została utworzona w 2003 roku w Tarnowie.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski urodził się w Kcyni na Pałukach.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Ojciec Jana Czochralskiego prowadził warsztat stolarski specjalizujący się w produkcji mebli.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski ukończył Seminarium Nauczycielskie i pracował jako nauczyciel.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>3, 'question'=>'W Berlinie, Jan Czochralski pracował w aptece i prowadził eksperymenty naukowe.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski uzyskał dyplom inżyniera chemika w 1910 roku.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski odkrył pomiar szybkości krystalizacji metali w 1916 roku.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski jest bezpośrednio zaangażowany w wynalezienie pierwszego tranzystora półprzewodnikowego.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski opatentował stop łożyskowy, zwany metalem B, w 1924 roku.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Czochralski został przewodniczącym Zarządu Głównego Niemieckiego Towarzystwa Metaloznawczego w 1925 roku.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Profesor Jan Czochralski wrócił na stałe do Polski w 1928 roku i został profesorem na Politechnice Warszawskiej.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski założył fabrykę kosmetyków i chemikaliów o nazwie "Bion" w Kcyni.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Profesor Czochralski zmarł na zawał serca po brutalnej rewizji przeprowadzonej przez funkcjonariuszy ubeckich.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Jan Czochralski został aresztowany podczas okupacji niemieckiej pod zarzutem współpracy z okupantem.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>3, 'question'=>'W czasie okupacji, Czochralski działał dla niemieckiego Wehrmachtu, organizując na bazie Politechniki Zakład Badań Materiałów.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Profesor Czochralski unikał konfliktów podczas okupacji i nie ratował ludzi zagrożonych aresztowaniem.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Po zakończeniu II wojny światowej, senat Politechniki Warszawskiej wykluczył Jana Czochralskiego z grona profesorów.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'W 1993 roku senat Politechniki Warszawskiej anulował haniebną uchwałę z 1945 roku dotyczącą wykluczenia Czochralskiego z grona profesorów.', 'correct'=>false]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Profesor Czochralski zmarł w 1953 roku.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'W 2011 roku, ujawnione dokumenty potwierdziły stałą współpracę Czochralskiego z wywiadem AK.', 'correct'=>true]);
        $this->insert('question', ['set_id'=>3, 'question'=>'Sejm Rzeczypospolitej Polskiej ustanowił rok 2013 Rokiem Jana Czochralskiego.', 'correct'=>true]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('question', []);
        $this->delete('set', []);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231217_132650_data cannot be reverted.\n";

        return false;
    }
    */
}
