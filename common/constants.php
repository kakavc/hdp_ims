<?php
	// Global variables

	$userAgentIE8     = 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C)';
	$userAgentFF3     = 'Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-TW; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16';
	$userAgentChrome  = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.1 (KHTML, like Gecko) Ubuntu/11.04 Chromium/14.0.825.0 Chrome/14.0.825.0 Safari/535.1';

	$caption_length   = '影片長度';
	$caption_publish  = '發佈時間';
	$caption_view     = '觀看次數';
	$caption_eval     = '觀眾評價';
	$caption_uploader = '影片上傳';

	// 86400 x 32
	$allowedSeconds   = 2764800;

	// Partial unicode points
	// http://www.htmlcodetutorial.com/characterentities_famsupp_69.html
	// http://www.w3.org/TR/REC-html40/sgml/entities.html
	// '--- BEGIN ---
	$supportedUnicodePoints = array(
		'&quot;' => '"', '&amp;' => '&', '&nbsp;' => ' ', '&cent;' => '¢',
		'&pound;' => '£', '&yen;' => '¥', '&brvbar;' => '¦', '&copy;' => '©',
		'&laquo;' => '«', '&not;' => '¬', '&shy;' => '­', '&reg;' => '®',
		'&macr;' => '¯', '&deg;' => '°', '&plusmn;' => '±', '&sup2;' => '²',
		'&sup3;' => '³', '&acute;' => '´', '&micro;' => 'µ', '&para;' => '¶',
		'&middot;' => '·', '&sup1;' => '¹', '&ordm;' => 'º', '&raquo;' => '»',
		'&frac14;' => '¼', '&frac12;' => '½', '&frac34;' => '¾', '&iquest;' => '¿',
		'&fnof;' => 'ƒ', '&circ;' => 'ˆ', '&tilde;' => '˜', '&Alpha;' => 'Α',
		'&Beta;' => 'Β', '&Gamma;' => 'Γ', '&Delta;' => 'Δ', '&Epsilon;' => 'Ε',
		'&Zeta;' => 'Ζ', '&Eta;' => 'Η', '&Theta;' => 'Θ', '&Iota;' => 'Ι',
		'&Kappa;' => 'Κ', '&Lambda;' => 'Λ', '&Mu;' => 'Μ', '&Nu;' => 'Ν',
		'&Xi;' => 'Ξ', '&Omicron;' => 'Ο', '&Pi;' => 'Π', '&Rho;' => 'Ρ',
		'&Sigma;' => 'Σ', '&Tau;' => 'Τ', '&Upsilon;' => 'Υ', '&Phi;' => 'Φ',
		'&Chi;' => 'Χ', '&Psi;' => 'Ψ', '&Omega;' => 'Ω', '&alpha;' => 'α',
		'&beta;' => 'β', '&gamma;' => 'γ', '&delta;' => 'δ', '&epsilon;' => 'ε',
		'&zeta;' => 'ζ', '&eta;' => 'η', '&theta;' => 'θ', '&iota;' => 'ι',
		'&kappa;' => 'κ', '&lambda;' => 'λ', '&mu;' => 'μ', '&nu;' => 'ν',
		'&xi;' => 'ξ', '&omicron;' => 'ο', '&pi;' => 'π', '&rho;' => 'ρ',
		'&sigmaf;' => 'ς', '&sigma;' => 'σ', '&tau;' => 'τ', '&upsilon;' => 'υ',
		'&phi;' => 'φ', '&chi;' => 'χ', '&psi;' => 'ψ', '&omega;' => 'ω',
		'&thetasym;' => 'ϑ', '&upsih;' => 'ϒ', '&piv;' => 'ϖ', '&ndash;' => '–',
		'&mdash;' => '—', '&lsquo;' => '‘', '&rsquo;' => '’', '&sbquo;' => '‚',
		'&ldquo;' => '“', '&rdquo;' => '”', '&bdquo;' => '„', '&dagger;' => '†',
		'&Dagger;' => '‡', '&bull;' => '•', '&hellip;' => '…', '&permil;' => '‰',
		'&prime;' => '′', '&Prime;' => '″', '&lsaquo;' => '‹', '&rsaquo;' => '›',
		'&oline;' => '‾', '&frasl;' => '⁄', '&euro;' => '€', '&trade;' => '™',
		'&larr;' => '←', '&uarr;' => '↑', '&rarr;' => '→', '&darr;' => '↓',
		'&harr;' => '↔', '&crarr;' => '↵', '&lArr;' => '⇐', '&uArr;' => '⇑',
		'&rArr;' => '⇒', '&dArr;' => '⇓', '&hArr;' => '⇔', '&forall;' => '∀',
		'&part;' => '∂', '&exist;' => '∃', '&empty;' => '∅', '&nabla;' => '∇',
		'&isin;' => '∈', '&notin;' => '∉', '&ni;' => '∋', '&prod;' => '∏',
		'&sum;' => '∑', '&minus;' => '−', '&lowast;' => '∗', '&radic;' => '√',
		'&prop;' => '∝', '&infin;' => '∞', '&ang;' => '∠', '&and;' => '∧',
		'&or;' => '∨', '&cap;' => '∩', '&cup;' => '∪', '&int;' => '∫',
		'&there4;' => '∴', '&sim;' => '∼', '&cong;' => '≅', '&asymp;' => '≈',
		'&ne;' => '≠', '&equiv;' => '≡', '&le;' => '≤', '&ge;' => '≥',
		'&sub;' => '⊂', '&sup;' => '⊃', '&nsub;' => '⊄', '&sube;' => '⊆',
		'&supe;' => '⊇', '&oplus;' => '⊕', '&otimes;' => '⊗', '&perp;' => '⊥',
		'&sdot;' => '⋅', '&lceil;' => '⌈', '&rceil;' => '⌉', '&lfloor;' => '⌊',
		'&rfloor;' => '⌋', '&lang;' => '〈', '&rang;' => '〉', '&loz;' => '◊',
		'&spades;' => '♠', '&clubs;' => '♣', '&hearts;' => '♥', '&diams;' => '♦'
	);
	// '--- END ---
?>
