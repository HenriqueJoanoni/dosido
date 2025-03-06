<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                "image" => "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSVuMTqVKDh8FWdWZHe7BohM3XytSWJ9ld40FRk8DQaDZIrowCs0yXm_7-ZdoK2pqCXDM40PPQD5U2s07DO6xLeRg",
                "title" => "Radical Face: The Musical Journey of Ben Cooper",
                "description" => <<<TEXT
                        Introduction
                        Radical Face is the musical project of American musician Ben Cooper, known for his evocative storytelling and cinematic compositions. Since adopting the name in 2003, Cooper has crafted a unique discography that blends folk, indie, and experimental elements, often revolving around deeply conceptual narratives.

                        ![Image](https://i.ytimg.com/vi/Z23_iiS-RtI/maxresdefault.jpg)

                        "Early Years (2003–2010)"
                        The name Radical Face was chosen by Cooper after spotting it on a flyer, later discovering it was originally a plastic surgery advertisement for a 'Radical Face-Lift' with the word 'lift' missing. His first album under the Radical Face moniker, "The Junkyard Chandelier" (2003), was never officially released but remains available as a free download. His official debut, "Ghost" (2007), introduced his distinctive blend of atmospheric instrumentation and lyrical storytelling.

                        "The Family Tree Trilogy (2010–2016)"
                        In 2010, Cooper began work on "The Family Tree", an ambitious trilogy narrating the lives of four generations of the fictional Northcote family. The albums incorporate historically accurate instruments to enhance the 19th and early 20th-century setting.

                        ![Image](https://www.forfolkssake.com/wp-content/uploads/2019/04/Hands_small-560x390.jpg)

                        The first installment, "The Roots", was released in October 2011, though an accidental early release on iTunes occurred in August. It was followed by "The Branches" (2013) and "The Leaves" (2016). Alongside the main trilogy, Cooper released a four-part EP series, "The Bastards", featuring songs that did not make the final album cuts.

                        "Missing Film and Subsequent EPs (2016–2023)"
                        In 2018, Cooper released "Missing Film", an instrumental album designed for use by independent filmmakers, distributed under an open license to allow royalty-free usage. Between 2017 and 2021, Radical Face released several EPs, including "SunnMoonnEclippse" (2017) and "Hidden Hollow, Vol. 1" (2021), the latter of which compiled six songs initially released through a monthly mailer project of the same name.

                        In 2023, Cooper introduced "A Light in the Woods", a multimedia project blending music, narrative, and visual art into a semi-animated fairy tale. The story follows Vagus, a member of a mythical species called the Walking Wood, as he embarks on a journey beyond his secluded village.

                        ![Image](https://www.usatoday.com/gcdn/-mm-/481b2d5e578998fdb3f4298a51905b61a8d8a939/c=0-592-5584-3462/local/-/media/USATODAY/popcandy/2014/07/08/1404824636000-Publicity-Photo-1----Moths-.jpg?width=3200&height=1645&fit=crop&format=pjpg&auto=webp)

                        The project will consist of six books, each approximately 40–50 minutes long, featuring 28 songs, over 50 pieces of score, and around 1,000 animated paintings. The first book, "Hidden Hollow", was released on October 20, 2023, alongside three standalone songs.

                        "In Popular Culture"
                        Radical Face’s music has been widely featured in film, television, and advertising campaigns:
                        - "Welcome Home" became well-known through Nikon’s global "I'M NIKON" campaign.
                        - "We're On Our Way" was used in the trailer for "The Perks of Being a Wallflower" (2012).
                        - Various songs from "The Family Tree" trilogy have been featured in films and TV series, including "Wish I Was Here", "Elementary", "Criminal Minds", and "Bones".
                        - "Glory" and "All is Well (Goodbye, Goodbye)" appeared in the 2016 film "Buddymoon".
                        - "The Road to Nowhere" was used in a 2021 Google commercial.
                        - The TV series "The Blacklist" has incorporated multiple Radical Face tracks, and in 2021, Cooper composed "One Last Dream" for the show’s season 8 finale.

                        Ben Cooper’s Radical Face project has grown into an immersive and deeply personal musical experience. From conceptual storytelling to film-friendly instrumentals, his work continues to captivate audiences across multiple media, solidifying Radical Face as a uniquely artistic voice in indie music.
                        TEXT,
                "date" => now(),
                "categories" => 1,
                "premium" => false,
            ],
            [
                "image" => "https://skippedonshuffle.com/wp-content/uploads/2019/12/Oasis.jpg",
                "title" => "Oasis: The Story of Britpop's Most Iconic Band",
                "description" => <<<TEXT
                        What started as a whisper soon became a cacophony. As the August Bank Holiday weekend approached the U.K. industry was abuzz with rumors that stadium dates had been booked and that the great divide between Noel and Liam Gallagher had been bridged. The following week (Aug. 27) Oasis released a statement saying that a truce had been reached and they would reunite.

                        ![Image](https://www.rollingstone.com/wp-content/uploads/2023/05/oasis-band-breakups-RS-1800.jpg?crop=0px%2C0px%2C1800px%2C1014px&resize=500%2C375)

                        "The guns have fallen silent. The stars have aligned. The great wait is over," they said. But how did the stars align exactly? It’s the question that everyone wants the answer to and, as of publication, we’re no closer to knowing. Beyond the reveal that the band would reunite to play a string of U.K. stadiums in 2025, there has been silence: no tell-all interview, or dispatches on Liam’s unfiltered, often hilarious, X (formerly Twitter) profile. Following the announcement, Noel did get cornered while out shopping by a brazen youngster who asked why the pair had fallen out. "‘Cause he stole my teddy bear," Noel replied coyly.

                        Perhaps it’s purely for sentimental reasons. For years the pair fired insults at the other via the press. Liam took to calling Noel a "potato" and chiding his "cosmic pop" direction in his solo material. Noel gave as good as he got, saying that he didn’t listen to Liam’s solo material because "I can’t stand his voice" and dubbed the younger brother’s 2019 single "Shockwave" as "Shitwave."

                        But eventually there was a softening. In a clip released alongside the 30th anniversary of "Definitely Maybe", Noel made a point of praising his brother’s vocal performances on the record. Last spring, he laid down the gauntlet to Liam to get a reunion sorted and to stop the chatter: "He should get his people to call my people." Seemingly, the call worked.

                        Post-COVID, the ‘90s have never been so popular. The decade’s aesthetic – baggy clothing, long hair, middle partings – has infiltrated TikTok videos, as has the sounds of the generation of musicians that made it big in the era. Reunion shows for the band’s contemporaries (and rivals) Blur and Pulp over the past two summers were attended by both Gen Z and their parents. Social media users have made spurious links between the selection of a Labour government in this year’s general election and that of Oasis’ return. In 1997, Tony Blair capitalized on the Britpop movement and his left-wing Labour government was elected in a landslide victory. Noel was later seen hobnobbing at No. 10 with the elites he once chided.

                        Liam, who remains a youth icon despite his 51 years, has seized the initiative. Earlier this summer, he celebrated "Definitely Maybe"’s 30th anniversary with a dedicated U.K. tour, playing the album in full. The tour was wildly successful earning rave reviews and stellar ticket sales; by the time he reached the run’s final show at Reading Festival on Aug. 25, he was teasing the incoming reunion announcement during the show.

                        The commercial opportunities for reuniting were likely overwhelming. Music industry expert Professor Jonathan Shalit estimated that the shows stand to generate £400 million in income for the group and promoters including SJM Concerts and Live Nation. Noel and Liam are expected to clear £50 million each after tax from these shows alone. "Billboard Boxscore" reported that a reunion world tour could "easily out-gross and out-sell the band’s entire touring history."

                        The band have already collaborated with fashion brands Levi’s, Urban Outfitters and even Amazon for new merchandise drops. Streams of the band’s back catalog are on the rise following the news of their announcement. The possibility of getting a new demographic into the back catalog on DSPs will sweeten their existing power on physical media: a reissue of "Definitely Maybe" is set to go in at No.1 on the U.K. Albums Charts this week, toppling "Sabrina Carpenter’s Short n’ Sweet".

                        There have been setbacks, however. Last year, Noel announced that he and publicist Sara McDonald, his partner since 2000 and the mother of two of his children, would be divorcing. Reports earlier this year said that Gallagher paid a settlement of £20 million to his former wife. She also took ownership of their £8 million-valued mansion in London.

                        There’s potentially another sizeable payday looming for Noel, the band’s chief songwriter. In 2025, the publishing rights for the band’s entire back catalog – including "Don’t Look Back In Anger" and "Wonderwall" – will reportedly revert back to his ownership.

                        In recent years, there’s been continued interest from record labels and investment firms such as Hipgnosis to acquire the rights to some of music’s most lucrative catalogs. Queen recently sold their rights for an eye-watering £1 billion, while Bruce Springsteen, Bob Dylan and Katy Perry have also landed sizeable sums for their work.

                        A 2025 reunion would no doubt act as a thrilling advert for the breadth and potential for these songs as they potentially go up for sale. The opportunity to boost streams of the catalog – where much of the income will be generated – through a renewed presence in the spotlight is a shrewd one. Liam, who did not contribute any songwriting credits until 2000’s "Little James," will likely not benefit from such a sale.

                        Despite the excitement and opportunities, Oasis have found themselves at the center of a storm. The use of Ticketmaster’s controversial "in-demand" dynamic pricing model meant that fans paid substantially higher prices than expected, particularly after queuing on the site for hours for a chance to purchase. Some reported paying over £350 for a ticket that initially was priced at £135. It has drawn the ire of fans, industry and politicians, with the government and the consumer watchdog "Competitions Market Authority" said to be "urgently investigating" the practice. The band have since responded saying that they had no "awareness that dynamic pricing was going to be used."
                        TEXT,
                "date" => now(),
                "categories" => 4,
                "premium" => true,
            ],
            [
                "image" => "https://romu.rocks/wp-content/uploads/2025/01/K1600_darkside-nothing-Cover-with-sticker-696x696-1.jpg",
                "title" => "Album Review: Darkside's Nothing is Real",
                "description" => <<<TEXT
                        Darkside, the collaborative project of Nicolás Jaar and Dave Harrington, has returned with their third studio album, "Nothing", released on February 28, 2025. This record marks a significant evolution in their sound, presenting a raw and surprisingly funky response to the tumultuous events of the past decade.

                        ![Image](https://focus.telerama.fr/2025/03/03/0/0/2190/1446/1200/0/60/0/bd3bf46_sirius-fs-upload-1-6yu6yxvgkxf9-1740993886119-dark.jpg)

                        "A Bold New Direction
                        Guided by the concept of wiping the slate clean, "Nothing" explores themes of renewal and hope amidst chaos. The duo’s signature blend of experimental rock and electronic music remains at the core of their sound, but this time, they strip things back even further, embracing a more organic and improvisational feel. Compared to 2021’s "Spiral", which leaned heavily into atmospheric textures, "Nothing" is more direct, structured, and rhythmically engaging.

                        "The Sound of "Nothing"
                        The album opens with "Eclipse," a brooding, slow-burning introduction that sets the stage for the album’s themes of rebirth and transformation. Swirling synths and echoing guitar lines create a hypnotic atmosphere before gradually building into a pulsating groove. "Infinite Jest," one of the album’s standout tracks, showcases Harrington’s intricate guitar work, weaving seamlessly with Jaar’s lush electronic production. The track takes unexpected turns, with moments of dissonance resolving into deeply satisfying harmonic progressions.

                        One of the most surprising elements of "Nothing" is its embrace of funk-inspired rhythms. Tracks like "Spiral" and "Mirror Image" feature driving basslines and syncopated percussion, adding a newfound sense of movement to Darkside’s typically introspective sound. This rhythmic dynamism contrasts with the album’s more ambient, meditative moments, creating a sense of push and pull that keeps the listener engaged throughout.

                        "Lyrical and Vocal Approach
                        Jaar’s vocal performance remains subtle and introspective, a hallmark of Darkside’s sound. Rather than dominating the mix, his voice acts as another instrument, blending seamlessly into the compositions. The lyrics on "Nothing" are more cryptic than on past releases, often evoking feelings of uncertainty, longing, and resilience. On "Memory Palace," Jaar sings about the passage of time and the fleeting nature of human connection, with lines like "We are echoes in the hallway, fading with the dawn."

                        "Critical and Fan Reception
                        Since its release, "Nothing" has been met with positive reviews from critics and fans alike. "Pitchfork" awarded the album a score of 7.8, describing it as a "desperately hopeful response to the chaos of the 2020s." "Rolling Stone" praised the album's ability to balance experimentation with accessibility, noting that "Darkside has found a way to make avant-garde rock feel deeply human and emotionally resonant." Fans of the duo have also lauded the album’s unpredictable nature, with many appreciating its blend of rawness and intricate production.

                        "Final Thoughts
                        With "Nothing", Darkside has crafted an album that feels both intimate and expansive. The interplay between minimalist arrangements and moments of intense catharsis makes for a deeply immersive listening experience. While it may not be as immediately accessible as some of their earlier work, "Nothing" rewards repeated listens, revealing new layers of complexity with each spin.

                        For fans of experimental rock and electronic fusion, "Nothing" is a must-listen. It stands as a testament to Darkside’s artistic growth and their continued ability to push the boundaries of their sound while staying true to their core identity. Whether you’re drawn to its hypnotic rhythms, haunting melodies, or deeply introspective lyrics, "Nothing" is an album that lingers long after the final note fades.
                        TEXT,
                "date" => now(),
                "categories" => 3,
                "premium" => false,
            ],
            [
                "image" => "https://www.theupcoming.co.uk/wp-content/uploads/2024/12/sabrina-carpenter-tour-2025.png",
                "title" => "Sabrina Carpenter on Her New Album and Upcoming Tour",
                "description" => <<<TEXT
                        Sabrina Carpenter has officially kicked off the European leg of her "Short n’ Sweet Tour", marking a new chapter in her flourishing career. The tour supports her highly anticipated sixth studio album, "Short n’ Sweet" (2024), and is her first-ever arena tour, showcasing her growing prominence in the pop music landscape.

                        ![Image](https://media.glamour.com/photos/674de951e3207eff7c778ed4/master/w_2560%2Cc_limit/GettyImages-2177695508.jpg)

                        "A Grand Opening in Dublin
                        The European tour commenced on March 3, 2025, at Dublin’s 3Arena, where Carpenter delivered a high-energy performance to an enthusiastic crowd. The setlist featured 20 songs, blending her latest hits with fan favorites, including "Feather," "Espresso," and "Please Please Please." In a unique twist, she also introduced a segment called "“Spin the Bottle,”" where she performs a surprise cover song each night, keeping fans on their toes.

                        Carpenter's Dublin show also made headlines for a cheeky moment where she appeared to take a dig at her ex-boyfriend Barry Keoghan, who hails from Ireland. While introducing one of her songs, she quipped about "hard work," leading many to speculate it was a subtle reference to their rumored breakup. Regardless of the speculation, the show was a massive success, setting the tone for an exciting tour ahead.

                        "A Tour Across Europe
                        Following the Dublin opener, Carpenter is set to take her tour across multiple European cities, including London, Paris, Berlin, Amsterdam, and Madrid. Each show promises an electrifying experience, with impressive stage production, dynamic choreography, and an undeniable charisma that has made her one of pop’s most exciting young stars.

                        One of the most anticipated stops on the tour is her performance at the Accor Arena in Paris on March 16, 2025. Tickets for this and other European shows have been selling quickly, with fans eager to see Carpenter perform live in some of the biggest venues of her career so far.

                        "A Second Leg for North America
                        In addition to her European dates, Carpenter recently announced a second leg of her North American tour, with new shows added in cities across the United States and Canada. Presale tickets are already available, with fans rushing to secure their spots for what promises to be a memorable tour.

                        "Merchandise and Fan Experience
                        Fans attending the "Short n’ Sweet Tour" can also purchase exclusive tour merchandise, available both at concert venues and through Carpenter’s official online store. Items include limited-edition apparel, posters, and collectibles inspired by the album’s vibrant aesthetic.

                        "A Career-Defining Moment
                        The "Short n’ Sweet Tour" represents a major milestone in Sabrina Carpenter’s career, proving that she has successfully transitioned from a rising pop star to a full-fledged arena headliner. With impressive vocal performances, infectious energy, and a deep connection with her fans, this tour is solidifying her status as one of the most exciting artists in contemporary pop music.

                        For those who haven’t secured tickets yet, official sales are available through platforms like "Live Nation" and "Ticketmaster". Don’t miss out on experiencing the magic of "Short n’ Sweet" live!
                        TEXT,
                "date" => now(),
                "categories" => 4,
                "premium" => true,
            ],
            [
                "image" => "https://i.pinimg.com/originals/77/b8/93/77b893e85b1323fcae959968ba9a604e.png",
                "title" => "Charlie Brown Jr.: The Legacy of a Brazilian Rock Icon",
                "description" => <<<TEXT
                        Charlie Brown Jr. was one of Brazil’s most influential rock bands, blending elements of punk rock, skate punk, rap rock, and reggae to create a unique and energetic sound. Formed in 1992 in Santos, São Paulo, the band became a defining force in Brazilian alternative music, amassing a devoted fan base and leaving an enduring legacy despite a turbulent history.

                        ![Image](https://media.rockbizz.com.br/2023/07/charlie-brown-jr-formacao-original.jpg)

                        Origins and Formation (1992-1997)
                        The band was founded by Alexandre Magno Abrão, better known as Chorão, alongside Thiago Castanho (guitar), Champignon (bass), and Renato Pelado (drums). Chorão, the charismatic frontman, envisioned a band that fused the rebellious spirit of skate culture with the intensity of rock music. Their name, "Charlie Brown Jr.", was inspired by a skateboard accident where Chorão crashed into a Charlie Brown cartoon billboard. The “Jr.” was added to symbolize the band’s youth and fresh approach to music.

                        After years of playing in underground venues, Charlie Brown Jr. gained traction, eventually signing with Virgin Records in 1997.

                        Rise to Fame and Breakthrough Albums (1997-2003)
                        Charlie Brown Jr. released their debut album, "Transpiração Contínua Prolongada" (1997), featuring hits like "O Coro Vai Comê!" and "Proibida Pra Mim (Grazon)". Their mix of rock, rap, and reggae, combined with lyrics about skateboarding, youth culture, and urban struggles, resonated with Brazilian audiences.

                        Their sophomore album, "Preço Curto... Prazo Longo" (1999), solidified their success, with standout tracks like "Zóio de Lula" and "Confisco". By this time, Charlie Brown Jr. had developed a distinct identity, characterized by Chorão’s aggressive delivery, powerful riffs, and socially conscious lyrics.

                        In 2001, the band released "Nadando com os Tubarões," which continued their commercial success. However, their 2002 album, "Bocas Ordinárias," was a game-changer, featuring hits like "Só Por Uma Noite" and "Papo Reto". This was followed by "Tamo Aí na Atividade" (2004), which won a Latin Grammy for Best Brazilian Rock Album.

                        Internal Conflicts and Lineup Changes (2004-2011)
                        Despite their success, internal tensions plagued Charlie Brown Jr. In 2005, bassist Champignon, drummer Renato Pelado, and guitarist Marcão left the band, leading to a temporary disbandment. Chorão rebuilt the lineup with new members, including Heitor Gomes on bass and Andre Pinguim on drums.

                        During this period, the band released "Imunidade Musical" (2005) and "Ritmo, Ritual e Responsa" (2007), which continued to perform well commercially. Charlie Brown Jr. also became known for their involvement in extreme sports culture, further cementing their influence on skateboarding and surf communities.

                        By 2011, the original bassist, Champignon, rejoined the band, leading to a short-lived reunion of the classic lineup. They released the album "Camisa 10 Joga Bola Até na Chuva" (2009), which won another Latin Grammy. However, tensions resurfaced, leading to internal disputes.

                        The Tragic End: The Death of Chorão and Champignon (2013)
                        On March 6, 2013, Chorão was found dead in his São Paulo apartment due to a cocaine overdose, sending shockwaves through the Brazilian music scene. His death marked the end of Charlie Brown Jr. as a functioning band.

                        Only six months later, on September 9, 2013, Champignon died by suicide, reportedly struggling with the grief of losing his longtime friend and bandmate. The double tragedy devastated fans and cemented the band's story as one of brilliance overshadowed by personal struggles.

                        Posthumous Releases and Legacy
                        Despite their tragic end, Charlie Brown Jr.’s music remains incredibly influential. Their final album, "La Familia 013," was released posthumously in 2013, featuring Chorão’s last recordings.

                        In the years following, former members launched projects like A Banca and CBJR 30, honoring Chorão’s legacy. In 2022, the documentary "Chorão: Marginal Alado" was released, celebrating his life and impact on Brazilian rock.

                        Charlie Brown Jr.’s influence is still felt across generations, with their music continuing to inspire skaters, surfers, and alternative rock fans. Their blend of rebellious energy, socially conscious lyrics, and powerful instrumentation ensures that their legacy will endure for years to come.

                        Notable Songs:
                        - "Zóio de Lula"
                        - "Proibida Pra Mim"
                        - "Papo Reto"
                        - "Só Os Loucos Sabem"
                        - "Dias de Luta, Dias de Glória"

                        Charlie Brown Jr.’s Impact
                        Charlie Brown Jr. was more than just a band—they represented a generation of Brazilian youth searching for self-expression, rebellion, and purpose. Their music remains a powerful reminder of the highs and lows of life, and their story, though tragic, is one of artistic passion and cultural impact that will never be forgotten.
                        TEXT,
                "date" => now(),
                "categories" => 3,
                "premium" => false,
            ],
            [
                "image" => "https://turnup-tickets.pl/img/thumbs/w1920h1003q100/event/sad-svit-gdansk-648.png",
                "title" => "SadSvit",
                "description" => <<<TEXT
                        Ukrainian indie artist "SadSvit" made waves in the underground music scene with the release of "Cassette" on December 13, 2021. This album is a melancholic yet deeply immersive experience, blending post-punk, indie rock, and lo-fi aesthetics into a raw and introspective sonic journey. While only 20 minutes long, "Cassette" manages to evoke a strong emotional response, making it a standout work in the Eastern European indie music landscape.

                        ![Image](https://ticketdirect.co.nz/wp-content/uploads/2022/07/Bildschirmfoto-2022-07-16-um-15.52.59.png.webp)

                        "A Nostalgic, Lo-Fi Soundscape
                        From the opening track, "Касета" (Cassette), SadSvit sets the tone for the album with a dreamy, slightly distorted sound that immediately pulls the listener into its intimate atmosphere. The lo-fi production gives the album a nostalgic feel, reminiscent of old cassette tapes—perhaps a deliberate choice to match the album's title.

                        SadSvit’s vocals are distant and hazy, as if they are part of the music rather than sitting on top of it. The guitar-driven melodies often feel both warm and melancholic, balancing between shoegaze-inspired textures and minimalist indie rock riffs.

                        "Standout Tracks & Collaborations
                        One of the album’s most striking elements is its collaborative tracks, which introduce new textures while staying true to the album’s introspective nature.
                        - ""Вдома Не Буду""" ("I Won’t Be Home") – Featuring "Стульчак Сталіна", this song carries a slightly faster tempo and more rhythmic urgency compared to the rest of the album. The guest vocals add a layer of contrast, making it one of the more dynamic tracks on "Cassette".
                        - ""Прощавай""" ("Goodbye") – A deeply emotional track featuring "Kuaskio", this song is filled with haunting echoes and sorrowful lyrics that linger in the mind long after the song ends. The title alone suggests themes of departure, and the music perfectly complements this sentiment.
                        - ""Дискотека""" ("Disco") – Despite its title, this track isn’t a traditional upbeat dance song but rather a melancholic reflection on nightlife and solitude. The pulsating rhythm and reverb-drenched guitars create a hypnotic effect, pulling the listener into a trance-like state.
                        - ""Танці""" ("Dances") – Featuring "Sad Novelist", this track carries a looser, more fluid energy. It plays with contrasts—fusing moody guitar work with subtle electronic elements, resulting in a song that feels both intimate and cinematic.

                        "Themes & Emotional Depth
                        Lyrically, "Cassette" explores themes of nostalgia, longing, self-discovery, and emotional detachment. While non-Ukrainian speakers may not immediately grasp the depth of the lyrics, the music alone communicates a powerful sense of introspection. SadSvit’s vocal delivery is almost ghostly, as if he’s recounting memories that are slipping away with each passing moment.

                        The album is particularly effective at evoking a sense of loneliness, not in a despairing way, but in a way that invites reflection and introspection. It’s the kind of album you’d listen to while wandering through empty city streets late at night, lost in thought.

                        "Reception & Cultural Impact
                        Despite its underground status, "Cassette" has garnered a dedicated following. On "Album of the Year", the album holds an average score of "67", based on 16 user reviews. Some listeners praise its raw, authentic sound and emotional depth, while others feel it leans too heavily on influences without offering something entirely new.

                        Critics and fans alike have drawn comparisons to artists like "Molchat Doma" and early "Cigarettes After Sex", noting the album’s darkwave influences and ethereal production style. However, SadSvit’s incorporation of Ukrainian lyrics and cultural elements gives the album a unique identity within the broader indie/post-punk genre.

                        "Final Thoughts: A Short but Powerful Journey
                        While "Cassette" may not be a groundbreaking reinvention of indie rock, it is undeniably a beautiful and deeply personal album. Its short runtime works in its favor, making it easy to listen to in one sitting while maintaining its emotional impact.

                        For fans of lo-fi indie, post-punk, and melancholic dream-pop, "Cassette" is a must-listen. It’s the kind of album that quietly demands your attention, rewarding those who take the time to fully immerse themselves in its world.

                        If you haven’t yet experienced "Cassette", it is available for streaming and purchase on platforms like "Bandcamp", where SadSvit’s growing fanbase continues to support his artistic evolution.
                        TEXT,
                "date" => now(),
                "categories" => 3,
                "premium" => false,
            ],
            [
                "image" => "https://dynamicmedia.livenationinternational.com/c/b/m/bf74b79e-c756-4726-881e-8892914d82fd.png?format=webp&width=3840&quality=100",
                "title" => "MAINSQUARE",
                "description" => <<<TEXT
                        The Main Square Festival is set to return to the historic Citadelle d'Arras from July 4 to 6, 2025, promising an eclectic mix of musical talent that caters to a wide array of musical tastes.

                        ![Image](https://phrnleng.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2024/11/27/node_229457/3550710/public/2024/11/27/30248373.jpeg?itok=NoqiVdYT1732737392)

                        Festival Dates and Location
                        Scheduled for Friday, July 4, Saturday, July 5, and Sunday, July 6, 2025, the festival will once again take place at the Citadelle d'Arras, a UNESCO World Heritage site. This historic venue has been the festival's home for many years, providing a unique backdrop that blends rich history with contemporary music.

                        Lineup Highlights
                        The 2025 lineup showcases a diverse array of artists, reflecting the festival's commitment to blending various musical genres:
                        - DJ Snake: The French DJ and producer renowned for global hits like "Turn Down for What" and "Lean On" will bring his electrifying electronic beats to the stage.
                        - Deftones: This American alternative metal band, known for their dynamic sound and passionate performances, adds a heavier edge to the lineup.
                        - Mika: The British-Lebanese singer-songwriter celebrated for his vibrant pop melodies and hits like "Grace Kelly" is sure to deliver an energetic set.
                        - Clara Luciani: A leading figure in French pop, Clara's soulful voice and poignant lyrics have captivated audiences nationwide.
                        - Julien Doré: The French singer-songwriter known for his eclectic style and poetic lyrics will add a touch of indie flair.
                        - Last Train: This French rock band brings raw energy and classic rock influences to the festival.
                        - Gracie Abrams: The American singer-songwriter, known for her introspective pop songs, adds an international touch to the lineup.
                        - Pierre Garnier: A rising star in the French music scene, Garnier's innovative sound blends electronic and pop elements.
                        - Bigflo & Oli: The French hip-hop duo, known for their insightful lyrics and catchy rhythms, are set to energize the crowd.
                        - Franglish: Bringing a fusion of rap and melodic hooks, Franglish adds to the festival's diverse musical offerings.
                        - Jolagreen23: An emerging artist making waves with unique sound and style.

                        These artists, among others, will perform across the festival's three days, ensuring a rich and varied musical experience for attendees.

                        Ticket Information
                        Tickets for the Main Square Festival 2025 are available for purchase through the official festival website. Options include single-day passes and three-day packages, catering to both local attendees and those traveling for the full festival experience.

                        Accommodation and Travel
                        Arras offers a range of accommodation options, from hotels to campsites, to suit various budgets. Given the festival's popularity, it's advisable to book accommodations early. The city is accessible via train, car, and bus, with additional transport services typically arranged during the festival period to accommodate the influx of visitors.

                        Festival Experience
                        Beyond the music, the Main Square Festival is known for its vibrant atmosphere, featuring food stalls offering local and international cuisine, merchandise vendors, and interactive installations. The Citadelle's expansive grounds provide ample space for multiple stages, ensuring a seamless flow between performances and activities.

                        Health and Safety
                        The festival organizers prioritize the safety and well-being of attendees. Detailed health and safety guidelines will be provided closer to the event date, in line with any prevailing public health recommendations.

                        Conclusion
                        The Main Square Festival 2025 promises to be a highlight of the summer music calendar, offering a diverse lineup set against the historic and picturesque backdrop of Arras. Whether you're a fan of electronic beats, rock anthems, or soulful melodies, this festival has something for everyone.
                        TEXT,
                "date" => now(),
                "categories" => 3,
                "premium" => false,
            ],
            [
                "image" => "https://ethic.es/wp-content/uploads/2024/02/paco-de-lucia.png",
                "title" => "Paco de Lucía: The Legendary Flamenco Guitarist",
                "description" => <<<TEXT
                        Paco de Lucía was one of the most influential and innovative flamenco guitarists of all time. Renowned for his virtuosic technique, deep understanding of traditional flamenco, and groundbreaking fusion with other musical styles, he elevated the guitar to new heights. His legacy continues to inspire musicians across genres, making him a true icon of Spanish music.

                        ![Image](https://media.npr.org/assets/img/2014/02/26/paco-f1c5be57f74fef83155ef6490808e206c4137924.jpg)

                        Early Life and Musical Beginnings (1947–1960s)
                        Born Francisco Gustavo Sánchez Gomez on December 21, 1947, in Algeciras, Spain, Paco de Lucía grew up in a family deeply rooted in flamenco tradition. His father, Antonio Sánchez, was a guitarist and his first teacher, while his mother, Luzia Gomes, inspired his stage name. From an early age, Paco was immersed in the world of flamenco, learning from his father and older brother, Ramón de Algeciras.

                        By the time he was seven years old, Paco was already dedicated to playing the guitar, practicing relentlessly. His prodigious talent soon became evident, and at just eleven years old, he gave his first public performance. In 1959, he won a special prize at the International Flamenco Competition in Jerez, marking the beginning of a stellar career.

                        Rise to Fame and Traditional Flamenco Mastery (1960s–1970s)
                        Paco de Lucía’s career gained momentum in the 1960s when he joined José Greco’s flamenco troupe, touring internationally. During this period, he met the legendary singer Camarón de la Isla, with whom he formed one of the most iconic duos in flamenco history. Their collaborations redefined the genre, producing ten albums that remain classics, including "El Duende Flamenco" (1972) and "La Leyenda del Tiempo" (1979).

                        In 1973, Paco de Lucía released "Fuente y Caudal," an album that included "Entre dos aguas," a rumba-flamenco piece that became a massive hit. This track introduced his music to a global audience, showcasing his ability to blend tradition with modern influences.

                        Innovation and Fusion with Jazz and Classical Music (1980s–1990s)
                        While deeply rooted in flamenco, Paco de Lucía was never afraid to push boundaries. In the 1980s, he ventured into jazz, collaborating with legendary musicians such as John McLaughlin and Al Di Meola. Their "Friday Night in San Francisco" (1981) album remains one of the most celebrated acoustic guitar recordings, demonstrating Paco’s unparalleled speed, precision, and improvisational skills.

                        During this period, he also worked with classical artists, most notably performing Rodrigo’s "Concierto de Aranjuez", bringing a new depth to classical guitar interpretations. His ability to blend flamenco with jazz and classical influences revolutionized the perception of Spanish guitar worldwide.

                        Later Years and Continued Influence (2000s–2014)
                        Even in his later years, Paco de Lucía continued to innovate and inspire. His 2004 album "Cositas Buenas" won a Latin Grammy for Best Flamenco Album, further cementing his status as a legend. Despite stepping away from the public eye for periods, he remained a towering figure in music, influencing new generations of flamenco guitarists.

                        Tragically, on February 25, 2014, Paco de Lucía passed away from a heart attack in Playa del Carmen, Mexico, at the age of 66. His death was a profound loss to the music world, but his legacy endures through his recordings and the countless artists he inspired.

                        Legacy and Impact
                        Paco de Lucía’s impact on flamenco and guitar music is immeasurable. He:
                        - Redefined flamenco, making it internationally respected as an art form.
                        - Bridged genres, blending flamenco with jazz, classical, and world music.
                        - Inspired generations of musicians, both within and beyond flamenco.

                        From his early days in Andalusia to global recognition, Paco de Lucía remains a beacon of artistic excellence. His music, filled with passion, virtuosity, and innovation, ensures that his name will be remembered as one of the greatest guitarists in history.
                        TEXT,
                "date" => now(),
                "categories" => 3,
                "premium" => true,
            ],
            [
                "image" => "https://www.iheartradio.ca/content/dam/audio/uploadImg/2024/11/14/lp-tour.png",
                "title" => "Linkin Park's 2025 Comeback: A New Era Begins",
                "description" => <<<TEXT
                        After years of uncertainty, Linkin Park has officially made their long-awaited return to the music scene in 2025. With a new album, a world tour, and a refreshed lineup, the band is proving that their legacy is far from over. This comeback represents both a tribute to their past and a bold step forward into the future.

                        ![Image](https://pyxis.nymag.com/v1/imgs/4f4/ed4/a7926725c4f0582d22b03925e279ce9343-linkinpark-vulture.1x.rsquare.w1400.jpg)

                        New Album: From Zero
                        On November 15, 2024, Linkin Park released From Zero, their first studio album since 2017. The album serves as a fresh start for the band, blending their signature nu-metal and alternative rock roots with modern influences. From Zero features deeply emotional lyrics, heavy guitar riffs, electronic elements, and dynamic vocal performances, reflecting the band’s evolution while staying true to their core identity.

                        Tracks such as Reignite, Gravity Falls, and Lost in Transmission have already become fan favorites, showcasing the band's ability to evolve while maintaining the powerful, anthemic sound that made them global icons. Critics have praised the album for its raw emotion, innovation, and the seamless balance between nostalgia and progression.

                        A Tribute to Chester Bennington
                        Linkin Park’s return is not just about moving forward but also honoring their past. From Zero pays tribute to their late frontman, Chester Bennington, whose influence remains deeply woven into the band's identity. Several tracks feature lyrical themes of resilience, loss, and hope, capturing the emotions that both the band members and fans have experienced since his passing.

                        During interviews, Mike Shinoda has emphasized that the album is not about replacing Chester but rather carrying on the band's mission in a way that respects his legacy. "Chester was, and always will be, a part of Linkin Park. This album is about continuing the story we started together," Shinoda stated.

                        The From Zero World Tour
                        To celebrate their return, Linkin Park has embarked on the From Zero World Tour, their first major global tour in over a decade. The tour spans more than 50 cities across North America, Europe, Asia, and Latin America, with sold-out arenas and festivals welcoming the band back with overwhelming enthusiasm.

                        The tour features a mix of their classic hits, including In the End, Numb, and Crawling, alongside new material from From Zero. The setlist has been carefully curated to create an emotional and high-energy experience for both longtime fans and newcomers.

                        One of the most anticipated shows will take place at the Stade de France in Paris on July 11, 2025, marking a milestone in their comeback.

                        Changes in the Lineup
                        As Linkin Park enters this new era, the band has undergone some lineup adjustments to adapt to their evolving sound and live performances. Mike Shinoda has taken on a more prominent role as the lead vocalist, with additional support from new co-vocalist Emily Armstrong. Armstrong, known for her powerful voice and stage presence, has been warmly received by fans, who appreciate her ability to complement Shinoda’s vocals while bringing her own energy to the band.

                        In addition, guitarist Brad Delson has opted to focus primarily on studio work and songwriting, stepping away from live performances. Guitarist Alex Feder has stepped in to play during the tour, earning praise for his technical skill and ability to capture the essence of Linkin Park’s sound on stage. Despite these changes, the band remains committed to preserving their original essence while embracing new dynamics.

                        A High-Profile Performance at the UEFA Champions League Final
                        In another major milestone, Linkin Park is set to perform at the halftime show of the UEFA Champions League Final on May 31, 2025, at the Allianz Arena in Munich. This performance is expected to be one of the biggest moments of their comeback, as it will be broadcast worldwide to millions of viewers. The setlist is rumored to include a mix of their greatest hits along with a special performance of a song from From Zero.

                        This event marks a rare moment for rock music in major sporting events, as Linkin Park follows in the footsteps of legendary acts that have brought rock and alternative music to a global stage.

                        The Future of Linkin Park
                        With the success of their comeback album and tour, Linkin Park has proven that their music remains as relevant as ever. Fans have embraced their new material while continuing to celebrate the band's legacy. Looking ahead, the band has hinted at additional projects, including potential collaborations, an extended tour, and even the possibility of more new music.

                        Mike Shinoda has expressed that this is just the beginning of a new chapter. "We didn’t come back just for nostalgia—we came back because we still have something to say, something to create. This is about the future as much as it is about honoring the past."

                        Linkin Park's return in 2025 is more than just a reunion; it is a testament to their resilience, creativity, and the unbreakable bond they share with their fans. As they continue to evolve, one thing is certain: their music and message will keep inspiring generations to come.
                        TEXT,
                "date" => now(),
                "categories" => 3,
                "premium" => false,
            ]
        ];

        foreach ($articles as $articleData) {
            $categoryId = $articleData['categories'];
            unset($articleData['categories']);

            $article = Article::create($articleData);
            $article->categories()->attach($categoryId);
        }
    }
}
