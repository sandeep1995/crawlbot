<h1># crawlbot 1.0</h1>
<h2>It is a web crawler up to level 2 crawling.</h2>
This is a web crawler. It is in its beta stage. It can find urls from a webpage upto level 2. I can increase the level as my wish but compilation time will increase exponentially.
<h3>You can improve this code base. There is lot of bugs regarding formatting the urls. Please help me with that.</h3>
Author: 
<a href="https://www.twitter.com/sandeepemon">@sandeepemon</a>
<h2>Sample Test Output on www.quora.com</h2>
<pre>

Website crawled : https://www.quora.com upto level 2<pre>Level = 1 Output<br><br>Array
(
    [0] => https://www.quora.com
    [1] => http://www.quora.com/about/tos
    [2] => http://www.quora.com/
    [3] => http://www.quora.com/about
    [4] => http://www.quora.com/careers
    [5] => http://www.quora.com/about/privacy
    [6] => http://www.quora.com/sitemap
)
<pre>Level = 2 Output<br>Array
(
    [0] => Array
        (
            [0] => https://www.quora.com
            [1] => http://www.quora.com/about/tos
            [2] => http://www.quora.com/
            [3] => http://www.quora.com/about
            [4] => http://www.quora.com/careers
            [5] => http://www.quora.com/about/privacy
            [6] => http://www.quora.com/sitemap
        )

    [1] => Array
        (
            [0] => http://www.quora.com/about/tos
            [1] => http://www.quora.com/
            [2] => http://www.quora.com/about
            [3] => http://www.quora.com/careers
            [4] => http://www.quora.com/press
            [5] => http://blog.quora.com
            [6] => http://www.quora.com/What-are-the-rules-and-policies-for-Quora-Credits
            [7] => http://www.chillingeffects.org
            [8] => http://www.chillingeffects.org/fairuse/notice.cgi?NoticeID=16887
            [9] => http://www.quora.com/about/privacy
            [10] => http://www.quora.com/How-do-medical-disclaimers-work-on-Quora-What-is-the-policy-on-questions-about-medical-issues-and-problems
            [11] => http://www.quora.com/How-do-legal-disclaimers-work-on-Quora-What-is-the-policy-on-questions-about-legal-issues-and-problems
            [12] => http://www.quora.com/about/open_source_tos
            [13] => http://www.quora.com/about/government_tos
            [14] => http://www.quora.com/about/challenges
            [15] => http://www.quora.com/sitemap
        )

    [2] => Array
        (
            [0] => http://www.quora.com/
            [1] => http://www.quora.com/about/tos
            [2] => http://www.quora.com/about
            [3] => http://www.quora.com/careers
            [4] => http://www.quora.com/about/privacy
            [5] => http://www.quora.com/sitemap
        )

    [3] => Array
        (
            [0] => http://www.quora.com/about
            [1] => http://www.quora.com/
            [2] => http://www.quora.com/careers
            [3] => http://www.quora.com/press
            [4] => http://blog.quora.com
            [5] => http://www.quora.com/What-are-some-productivity-tips-from-various-professions
            [6] => http://www.quora.com/What-is-it-like-to-live-in-space
            [7] => http://www.quora.com/Why-do-we-sleep
            [8] => http://www.quora.com/What-is-it-like-to-work-with-Elon-Musk
            [9] => http://www.quora.com/Adriana-Heguy/answers
            [10] => http://www.quora.com/Ashton-Kutcher/answers
            [11] => http://www.quora.com/Eva-Kor/answers
            [12] => http://www.quora.com/Clayton-C-Anderson/answers
            [13] => http://www.quora.com/Hans-Zimmer-11/answers
            [14] => http://www.quora.com/about/challenges
            [15] => http://www.quora.com/about/privacy
            [16] => http://www.quora.com/about/tos
            [17] => http://www.quora.com/sitemap
        )

    [4] => Array
        (
            [0] => http://www.quora.com/careers
            [1] => http://www.quora.com/
            [2] => http://www.quora.com/about
            [3] => http://www.quora.com/press
            [4] => http://blog.quora.com
            [5] => http://www.quora.com/careers/data_science_manager
            [6] => http://www.quora.com/careers/data_scientist_new_grad
            [7] => http://www.quora.com/careers/data_scientist_intern
            [8] => http://www.quora.com/careers/communication_designer
            [9] => http://www.quora.com/careers/product_design_intern
            [10] => http://www.quora.com/careers/product_designer
            [11] => http://www.quora.com/careers/product_designer_platform
            [12] => http://www.quora.com/careers/application_security_engineer
            [13] => http://www.quora.com/careers/engineering_manager_machine_learning
            [14] => http://engineering.quora.com/Machine-Learning-at-Quora
            [15] => http://www.quora.com/careers/software_engineer
            [16] => http://www.quora.com/careers/software_engineer_growth
            [17] => http://www.quora.com/careers/software_engineer_infrastructure_systems
            [18] => http://www.quora.com/careers/software_engineer_javascript
            [19] => http://www.quora.com/careers/software_engineer_machine_learning
            [20] => http://www.quora.com/careers/software_engineer_nlp
            [21] => http://www.quora.com/careers/software_engineer_new_grad
            [22] => http://www.quora.com/careers/software_engineer_product
            [23] => http://www.quora.com/careers/software_engineer_intern
            [24] => http://www.quora.com/careers/user_interface_engineer
            [25] => http://www.quora.com/careers/technical_recruiter
            [26] => http://www.quora.com/careers/country_manager_india
            [27] => http://www.quora.com/about/challenges
            [28] => http://www.quora.com/about/privacy
            [29] => http://www.quora.com/about/tos
            [30] => http://www.quora.com/sitemap
        )

    [5] => Array
        (
            [0] => http://www.quora.com/about/privacy
            [1] => http://www.quora.com/
            [2] => http://www.quora.com/about
            [3] => http://www.quora.com/careers
            [4] => http://www.quora.com/press
            [5] => http://blog.quora.com
            [6] => http://www.quora.com/about/tos
            [7] => http://www.quora.com/settings
            [8] => http://www.networkadvertising.org/managing/opt_out.asp
            [9] => http://www.aboutads.info/consumers
            [10] => http://www.quora.com/about/challenges
            [11] => http://www.quora.com/sitemap
        )

    [6] => Array
        (
            [0] => http://www.quora.com/sitemap
            [1] => http://www.quora.com/
            [2] => http://www.quora.com/sitemap/recent
            [3] => http://www.quora.com/sitemap/questions
            [4] => http://www.quora.com/sitemap/topics
            [5] => http://www.quora.com/sitemap/alphabetical_topics/all
            [6] => http://www.quora.com/sitemap/people
            [7] => http://www.quora.com/sitemap/blogs
            [8] => http://www.quora.com/Health
            [9] => http://www.quora.com/Healthy-Eating
            [10] => http://www.quora.com/Medicine-and-Healthcare
            [11] => http://www.quora.com/Exercise
            [12] => http://www.quora.com/Healthy-Living
            [13] => http://www.quora.com/Nutrition
            [14] => http://www.quora.com/Mental-Health
            [15] => http://www.quora.com/History
            [16] => http://www.quora.com/World-History
            [17] => http://www.quora.com/History-of-the-United-States-1
            [18] => http://www.quora.com/Military-History-and-Wars-1
            [19] => http://www.quora.com/World-War-II
            [20] => http://www.quora.com/Philosophy
            [21] => http://www.quora.com/Religion
            [22] => http://www.quora.com/Philosophy-of-Science
            [23] => http://www.quora.com/Books
            [24] => http://www.quora.com/Writing
            [25] => http://www.quora.com/Literature
            [26] => http://www.quora.com/Book-Recommendations
            [27] => http://www.quora.com/Novels
            [28] => http://www.quora.com/Reading-1
            [29] => http://www.quora.com/Fiction
            [30] => http://www.quora.com/Literary-Fiction
            [31] => http://www.quora.com/Technology
            [32] => http://www.quora.com/Science
            [33] => http://www.quora.com/Computer-Science
            [34] => http://www.quora.com/Physics
            [35] => http://www.quora.com/Psychology
            [36] => http://www.quora.com/Economics
            [37] => http://www.quora.com/Mathematics
            [38] => http://www.quora.com/Technology-Trends
            [39] => http://www.quora.com/Computer-Programming
            [40] => http://www.quora.com/Software-Engineering
            [41] => http://www.quora.com/Machine-Learning
            [42] => http://www.quora.com/Social-Psychology
            [43] => http://www.quora.com/The-Universe
            [44] => http://www.quora.com/Algorithms
            [45] => http://www.quora.com/Neuroscience-1
            [46] => http://www.quora.com/Programming-Languages
            [47] => http://www.quora.com/Statistics-academic-discipline
            [48] => http://www.quora.com/Probability-statistics-1
            [49] => http://www.quora.com/Startups
            [50] => http://www.quora.com/Lean-Startups
            [51] => http://www.quora.com/Startup-Founders-and-Entrepreneurs
            [52] => http://www.quora.com/Startup-Advice-and-Strategy
            [53] => http://www.quora.com/Venture-Capital
            [54] => http://www.quora.com/Business
            [55] => http://www.quora.com/Entrepreneurship
            [56] => http://www.quora.com/Finance
            [57] => http://www.quora.com/Business-Strategy
            [58] => http://www.quora.com/Marketing
            [59] => http://www.quora.com/Investing
            [60] => http://www.quora.com/Business-Models
            [61] => http://www.quora.com/Stock-Market
            [62] => http://www.quora.com/Career-Advice
            [63] => http://www.quora.com/Personal-Finance
            [64] => http://www.quora.com/Money
            [65] => http://www.quora.com/Design
            [66] => http://www.quora.com/Photography
            [67] => http://www.quora.com/Fashion-and-Style-1
            [68] => http://www.quora.com/Fine-Art
            [69] => http://www.quora.com/Web-Design
            [70] => http://www.quora.com/User-Interfaces
            [71] => http://www.quora.com/Digital-Photography
            [72] => http://www.quora.com/Product-Design-physical-goods
            [73] => http://www.quora.com/Clothing-and-Apparel
            [74] => http://www.quora.com/Visiting-and-Travel-1
            [75] => http://www.quora.com/International-Travel
            [76] => http://www.quora.com/Vacations
            [77] => http://www.quora.com/Tourism
            [78] => http://www.quora.com/Travel-Hacks
            [79] => http://www.quora.com/Sports
            [80] => http://www.quora.com/Football-Soccer-2
            [81] => http://www.quora.com/Cricket-sport
            [82] => http://www.quora.com/Education
            [83] => http://www.quora.com/Scientific-Research
            [84] => http://www.quora.com/Higher-Education
            [85] => http://www.quora.com/Learning
            [86] => http://www.quora.com/TED
            [87] => http://www.quora.com/Graduate-School-Education
            [88] => http://www.quora.com/The-College-and-University-Experience
            [89] => http://www.quora.com/Journalism
            [90] => http://www.quora.com/Entertainment
            [91] => http://www.quora.com/Hollywood
            [92] => http://www.quora.com/Movies
            [93] => http://www.quora.com/Music
            [94] => http://www.quora.com/Rock-Music
            [95] => http://www.quora.com/Musicians
            [96] => http://www.quora.com/Television
            [97] => http://www.quora.com/Television-Series
            [98] => http://www.quora.com/Game-of-Thrones-TV-series
            [99] => http://www.quora.com/How-I-Met-Your-Mother-TV-series
            [100] => http://www.quora.com/Dating-and-Relationships-1
            [101] => http://www.quora.com/Life
            [102] => http://www.quora.com/Love
            [103] => http://www.quora.com/Humor
            [104] => http://www.quora.com/Self-Improvement
            [105] => http://www.quora.com/Social-Advice
            [106] => http://www.quora.com/Tips-and-Hacks-for-Everyday-Life
            [107] => http://www.quora.com/Interpersonal-Interaction
            [108] => http://www.quora.com/Life-Lessons
            [109] => http://www.quora.com/Friendship
            [110] => http://www.quora.com/Comedy
            [111] => http://www.quora.com/Life-Advice
            [112] => http://www.quora.com/Marriage
            [113] => http://www.quora.com/Dating-Advice
            [114] => http://www.quora.com/Politics
            [115] => http://www.quora.com/Government
            [116] => http://www.quora.com/International-Relations-3
            [117] => http://www.quora.com/Food
            [118] => http://www.quora.com/Cooking
            [119] => http://www.quora.com/Recipes
            [120] => http://www.quora.com/Restaurants
            [121] => http://www.quora.com/YouTube
            [122] => http://www.quora.com/Google
            [123] => http://www.quora.com/Facebook-1
            [124] => http://www.quora.com/Quora
            [125] => http://www.quora.com/sitemap/alphabetical_topics/0
            [126] => http://www.quora.com/sitemap/alphabetical_topics/a
            [127] => http://www.quora.com/sitemap/alphabetical_topics/b
            [128] => http://www.quora.com/sitemap/alphabetical_topics/c
            [129] => http://www.quora.com/sitemap/alphabetical_topics/d
            [130] => http://www.quora.com/sitemap/alphabetical_topics/e
            [131] => http://www.quora.com/sitemap/alphabetical_topics/f
            [132] => http://www.quora.com/sitemap/alphabetical_topics/g
            [133] => http://www.quora.com/sitemap/alphabetical_topics/h
            [134] => http://www.quora.com/sitemap/alphabetical_topics/i
            [135] => http://www.quora.com/sitemap/alphabetical_topics/j
            [136] => http://www.quora.com/sitemap/alphabetical_topics/k
            [137] => http://www.quora.com/sitemap/alphabetical_topics/l
            [138] => http://www.quora.com/sitemap/alphabetical_topics/m
            [139] => http://www.quora.com/sitemap/alphabetical_topics/n
            [140] => http://www.quora.com/sitemap/alphabetical_topics/o
            [141] => http://www.quora.com/sitemap/alphabetical_topics/p
            [142] => http://www.quora.com/sitemap/alphabetical_topics/q
            [143] => http://www.quora.com/sitemap/alphabetical_topics/r
            [144] => http://www.quora.com/sitemap/alphabetical_topics/s
            [145] => http://www.quora.com/sitemap/alphabetical_topics/t
            [146] => http://www.quora.com/sitemap/alphabetical_topics/u
            [147] => http://www.quora.com/sitemap/alphabetical_topics/v
            [148] => http://www.quora.com/sitemap/alphabetical_topics/w
            [149] => http://www.quora.com/sitemap/alphabetical_topics/x
            [150] => http://www.quora.com/sitemap/alphabetical_topics/y
            [151] => http://www.quora.com/sitemap/alphabetical_topics/z
            [152] => http://www.quora.com/about
            [153] => http://www.quora.com/careers
            [154] => http://www.quora.com/about/privacy
            [155] => http://www.quora.com/about/tos
        )

)

</pre>
