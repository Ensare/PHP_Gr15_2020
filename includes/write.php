
<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                color:#742323;
                font-size:18px;
                background-color: #DADADA;
            }
            p{
                border: 2px solid #742323;
                margin:80px auto;
                padding:15px;
                width:450px;

            }
        </style>
    </head>
    <body>
        <?php

            $var = fopen('data.txt', 'w+');
            $content = "A Brief History of Interior Design

The profession of interior design is just over 100 years old. In these hundred years, what began as the art of decorating, embracing form and function, has evolved by leaps and bounds into today’s world of highly specialized areas of interior design that require years of study and experience.

In the early 1900’s, the term “Interior Decorator” was first used in America. Most decorators at the time had no academic credentials, but the best of them had a combination of good taste, common senses, and natural talent to interpret and address the issues, such as scale and proportion. Elsie de Wolfe became the first Interior Decorator to be given a design “commission.” In 1913, Elsie de Wolfe published the first interior design book, “The House in Good Taste.” Dorothy Draper was the first documented commercial Interior Decorator, establishing her design firm in 1923.

The term “Interior Designer” was coined in the 1930’s, by a magazine called “Interior Design and Decoration.” That magazine was not printed between 1943 and 1952, but a competing magazine, “Interiors,” insisted on using only the term “interior designer,” not “decorator.” At this time design schools also recognized the work not only of designers but also of architects and engineers. “Interiors” published more contract work than residential work. When “Interior Design and Decoration” magazine resumed publication, it dropped the term “and Decoration” from its name.

The largest professional organization in the field at the time, AID, was founded in 1931 when a group meeting convened at a furniture show determined to create a national professional organization. AID changed its name from the American Institute of Decorators to the American Institute of Interior Designers (AID) in 1936. Over the years, as the profession of interior design grew, so did the number of organizations and associations to represent the varied professional members.

In the 1970’s both The Foundation for Interior Design Educational Research (FIDER) and National Council for Interior Design Qualification (NCIDQ) were formed to establish, maintain and govern standards for the education and examination of interior design professionals.

It was not until 1982 that the first United States legislation supporting the fast evolving profession of interior design was passed. That legislation was passed in Alabama.

The history of interior design continues to rapidly evolve in a world that is at once becoming ever more global and at the same time demanding the fine-focus of specialized areas of critical knowledge. Interior design specialties are now widely accepted as part of the norm in built environments where the health, safety and welfare of the public are of foremost importance, including, but not limited to, Design for Aging in Place, Universal Design, Healthcare Design, Educational & Institutional Design, Specialty Workplace Design and more.

Professionalization of Interior Design Presentation

Powered by

Publish for Free

Time Line

1878
First semi-annual furniture market (held in Grand Rapids, Michigan).

1904
First documented use of term “interior decoration.”

First courses in interior decoration offered at the New York School of Applied and Fine Arts (Now Parsons).

1905
Elsie de Wolfe obtains her first commission as an interior decorator, and is identified as being the first interior decorator. In 1913 she goes on to publish the first recognized book on interior design “The House in Good Taste”

1925
Dorothy Draper starts the “Architectural Clearing House” and is identified as the first woman interior decorator to specialize in commercial interiors.

1931
The American Institute of Interior Decorators (AIID) is formed.

1936
AIID changes its name to the American Institute of Decorators (AID).

1957
National Society for Interior Designers (NSID) is formed as a splinter group of the New York Chapter of the AID.

1961
AID changes its name to the American Institute of Interior Designers (still AID).

1963
National Office Furnishings Association (NOFA) creates NOFA-d (NOFA designers), a professional group for Interior Designers who work for office furnishings dealers. Interior Design Educators Council (IDEC) is formed.

1969
Institute of Business Designers (IBD) was started from NOPA-d (name changed from NOFA-d).

1970
Foundation for Interior Design Education Research (FIDER) is formed to review and accredit undergraduate and graduate interior design programs.

1974
National Council for Interior Design Qualification (NCIDQ) is formed to develop and administer a national interior design qualification exam.

1975
American Society of Interior Designers (ASID) is created from the union of American Institute of Interior Designers (AID) and National Society of Interior Designers (NSID).

1982
Alabama becomes first state with title registration legislation for Interior Design.

1992
Americans with Disabilities Act (ADA) becomes law, identifying accessibility standards for all public buildings.

1994
Unification of International Business Designers (IBD), International Society of Interior Designers (ISID), and Council of Federal Interior Designers (CFID) to form International Interior Design Association (IIDA), with the intent to create an international association with a united mission that would represent interior designers worldwide.

2006
Foundation for Interior Design Education Research (FIDER) becomes the Council for Interior Design Accreditation (CIDA).";
fwrite($var,$content);
?>
     <p>Here is everything about <a href="read.php">Interior Design</a> form 100 years!!</p>
    </body>
</html>