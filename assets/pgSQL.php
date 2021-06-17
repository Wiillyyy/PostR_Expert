<?php

// il s'agit là de beaucoup de texte, je n'avais pas envie de le mettre dans la bdd postgresql, c'est un CHOIX
// j'ai préféré utiliser un fichier en local pour les informations des poster car il n'est pas prévu au cahier des charges de changer ou de supprimer les poster


$texte=array ( // ici une fonction array du côté 'INFORMATION PRODUIT' de la page produitdetail.php change en fonction du idmenu
    1 => "Véritable Avis De Recherche de l'univers One Piece pour les vrais pirates ! <br/> Impression de Haute Qualité : couleurs fidèles et relief 3D ! <br/> Dimension : 720x480",
    2 => "Amoureux de la Grosse Pomme ? Découvrez ce Poster incroyable de New York <br/> Impression de Haute Qualité : Éclat des couleurs et légérement brillant <br/> Dimension : 720x480",
    3 => "Fan de Series Netflix et de Sciences Fiction ? Découvrez ce Magnifique poster de la série phare Stranger Things <br/> Impression sur papier glacé <br/> Dimension : 720x480",
    4 => "Envie de voyager ? Découvrez ce splendide poster style retro aux couleurs vibrantes qui donnera un charme tendance à votre intérieur <br/> Visuel de style vintage basé sur les grandes publicités et licences du XXème siècle <br/> Dimension : 720x480",
    5 => "Un petit retour dans les années 90 vous redonnera un brin de Nostalgie, avec ce Poster de Super Mario Bros 3, sortez votre vieille Super NES et soufflez dans votre cartouche ! <br/> Impression un peu ancienne, traces de poussières présentes",
    6 => "Un Poster de Heavy Metal pour le type de musique que vénérez. Metallica, AC/DC, Korn, Nivana, Led Zeppelin, tous ont pris la pose pour décorer votre maison, et pourquoi pas vos WC ? <br/> Cadre en métal pour résister aux chocs brutaux et a la musique hardcore",
);

$info=array ( // ici une fonction array du côté 'DESCRIPTION' de la page produitdetail.php change en fonction du idmenu
    1 => "Monkey D. Luffy (モンキー・Ｄディー・ルフィ, Monkī Dī Rufi) est un pirate et le principal protagoniste du manga et anime One Piece. 
    Luffy est le fils du chef de l'Armée Révolutionnaire, Monkey D. Dragon, le petit-fils du célèbre Vice-Amiral de la Marine, Monkey D. Garp, 
    le fils adoptif d'une bandit des montagnes, Curly Dadan ainsi que le frère adoptif du défunt Portgas D. Ace et de Sabo. Son rêve le plus cher 
    est de devenir le Seigneur des Pirates en trouvant le trésor légendaire One Piece, caché quelque part dans le monde par Gol D. Roger. 
    Selon lui, être le Seigneur des Pirates signifie être celui qui jouit d'une liberté sans pareille dans le monde. 
    Il a mangé un Fruit du Démon : le Gomu Gomu no Mi, qui a été rapporté lors d'un voyage par L'Équipage du Roux au Village de Fuchsia, à ce moment là.",

    2 => "New York, officiellement nommée City of New York, connue également sous les noms et abréviations de New York City ou NYC 
    (pour éviter la confusion avec l'État de New York), et dont le surnom le plus connu est The Big Apple, est la plus grande ville des États-Unis en nombre d'habitants 
    et l'une des plus importantes du continent américain. Elle se situe dans le Nord-Est du pays, sur la côte atlantique, à l'extrémité sud-est de l'État de New York. 
    La ville de New York se compose de cinq arrondissements appelés boroughs : Manhattan, Brooklyn, Queens, le Bronx et Staten Island. Ses habitants s'appellent les New-Yorkais
    New York exerce un impact significatif sur le commerce mondial, la finance, les médias, l'art, la mode, la recherche, la technologie, l'éducation, 
    le divertissement et le tourisme, regroupant l'ensemble des caractéristiques d'une ville mondiale. 
    Si elle n'est plus la capitale fédérale des États-Unis depuis plus de deux siècles,
    New York alimente pendant quelques décennies une rivalité financière et politique avec Philadelphie.",
    
    3 => "Stranger Things est une série télévisée américaine de science-fiction horrifique, créée par Matt et Ross Duffer et diffusée depuis le 15 juillet 2016 sur Netflix.
    Elle compte à ce jour trois saisons et vingt-cinq épisodes. L'ambiance de la série est fortement inspirée par les films fantastiques et de science-fiction des années 1980,
    puisant ses influences dans les œuvres de H. P. Lovecraft, Steven Spielberg, John Carpenter, John Hughes ou Stephen King.
    Stranger Things est l'une des séries diffusées en streaming les plus regardées dans le monde 
    <br/><br/> L'intrigue : Un soir de novembre 1983 à Hawkins, dans l'Indiana, le jeune Will Byers, douze ans, disparaît brusquement sans laisser de traces, 
    hormis son vélo. Plusieurs personnages vont alors tenter de le retrouver : sa mère Joyce, ses amis menés par Mike Wheeler et guidés par la mystérieuse Onze, 
    une jeune fille ayant des pouvoirs psychiques, ainsi que le chef de la police Jim Hopper. Parallèlement, la ville est le théâtre de phénomènes surnaturels liés au 
    Laboratoire national d'Hawkins, géré par le Département de l'Énergie des États-Unis (DoE) et indirectement la Central Intelligence Agency (CIA), 
    dont les expériences dans le cadre du projet MK-Ultra ne semblent pas étrangères à la disparition de Will.",

    4 => "Annecy est une commune et une ville française, chef-lieu et préfecture du département de la Haute-Savoie en région Auvergne-Rhône-Alpes. 
    Au nord des Alpes françaises, après Genève à 40 km au nord, Annecy fait partie de l'axe des agglomérations du sillon alpin en alignement avec Chambéry puis Valence et Grenoble.
    La « Perle des Alpes » de la monographie urbaine de Raoul Blanchard forme une cluse de contact entre la plaine des Fins et les Préalpes contraignant sa population à 
    l'intérieur de sa zone constructible des années 1960 à la fusion communale de 2017. Depuis l'absorption des territoires d'Annecy-le-Vieux, de Cran-Gevrier, de Meythet, 
    de Pringy et de Seynod, Annecy se hisse à la 29e place des villes françaises2 les plus peuplées avec 128 199 habitants, ainsi qu'en 6e position régionale des aires urbaines 
    derrière Annemasse et devant Chambéry.",

    5 => " Super Mario Bros. 3 (スーパーマリオブラザーズ3, Sūpā Mario Burazāzu Surī?) 
    est un jeu vidéo de plates-formes développé et édité par Nintendo sur Nintendo Entertainment System. 
    Il s'agit du troisième volet de la série Super Mario et il est commercialisé en 1988 au Japon, en 1990 aux États-Unis et en 1991 en Europe. 
    Le développement est pris en charge par Nintendo Entertainment Analysis & Development sous la houlette de Shigeru Miyamoto, 
    qui dirige le jeu avec Takashi Tezuka et Hiroshi Yamauchi.

    Le jeu met en avant les personnages de Mario et Luigi dans une quête pour sauver les souverains de chacune des sept régions du Royaume Champignon des griffes de Bowser. Les deux frères voyagent à travers huit mondes afin de rétablir l'ordre dans le royaume. Le gameplay du jeu est basé sur celui des précédents titres de la série, et des nouveaux power-ups améliorent les capacités des personnages. Super Mario Bros. 3 établit des conventions reprises dans les jeux suivants de la série.",
    
    6 => " Le heavy metal (ou simplement metal), parfois retranscrit heavy métal en français, est un genre musical dérivé du rock apparu au Royaume-Uni et aux États-Unis à la 
    fin des années 1960. Cependant, le terme de « heavy metal » est sujet à confusion car il peut prendre plusieurs sens différents selon le contexte dans lequel il est employé. 
    Dans son contexte d'origine, il était indifféremment utilisé comme un synonyme de hard rock4. Dans un second sens, le terme désigne le heavy metal traditionnel, 
    une tendance esthétique plus radicale qui, au cours des années 1970 et 1980, s’est démarquée du hard rock, en s’éloignant de ses racines blues,
    même si cette distinction est contestée par des recherches récentes6. Dans un sens large et généralisé, 
    le heavy metal ou metal (tout court) désigne toutes les musiques qui descendent du heavy metal traditionnel et du hard rock ",
);

// ici une fonction que je trouve géniale, qui permet de lister des var en fonction d'un fichier 
$image1 ="assets/random/produit-1.png";
$image2 ="assets/random/produit-2.png";
$image3 ="assets/random/produit-3.png";
$image4 ="assets/random/produit-4.png";
$image5 ="assets/random/produit-5.png";
$image6 ="assets/random/produit-6.png";

$imageArr= array ( // qu'on array et qu'on introduit dans produitdetail.php en fonction du idmenu
    1 => $image1,
    2 => $image2,
    3 => $image3,
    4 => $image4,
    5 => $image5,
    6 => $image6,
);

?>