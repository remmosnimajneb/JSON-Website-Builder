# JSON Website Builder

- Project: JSON Website Builder
- Code Version: 1.5
- Author: Benjamin Sommer - smmr.dev (@remmosnimajneb) for The Berman Consulting Group (BermanGroup.com)
- GitHub: https://github.com/remmosnimajneb
- Theme Design by: `Hypothesis` by AJ at Pixelarity.com
- Licensing Information: CC BY-SA 4.0 (https://creativecommons.org/licenses/by-sa/4.0/)

## Table of Contents:
1. Overview
2. Requirements & Install Instructions

## SECTION 1 - OVERVIEW

Well what is this?

Well if we're being honest? It's pretty much the same thing as just doing static HTML.

This is kind of a helper framework (in it's most basic form) to allow for static HTML but also call re-usable parts from pages

In slightly more words: The system essentially pulls the path from the URL and then finds the page and shows the header, content and footer for that config. Otherwise -> 404

He are the "basic" advantages:
1. No annoying ".php" in the URL (Yes .HTACCESS, I know)
2. Reusable Header and Footer requires (I know, require() - that basically summarizes the program)
3. Easy redirect links (Again, .HTACCES, I know)
So look, is this the best thing? Nah. Will I stick it here anyhow? Well clearly your reading it, sooo....

## SECTION 2 - REQUIRMENTS & INSTALL INSTRUCTIONS
	
Requirments:

- A web server (Local only access is ok) with PDO type PHP Extention (Important!)
- PHP
- That's it

Aight, let's go! Let's install this thing already!

1. Drop all the files into a directory.
2. Set the URL in the Config.json file
3. Done.

Welp, that's it. Have fun!