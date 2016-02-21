<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'changelog' => 'Changelog for mSearch2.

1.3.4 pl
==============
- Improved boolean filter.

1.3.3 pl1
==============
- Updated version of pdoTools in the installer.

1.3.2 pl1
==============
- [mSearch2] Added new system option "mse2_index_all".
- [mSearch2] Added new system option "mse2_index_split_words".

1.3.1 pl
==============
- [mFilter2] Fixed "filter_key" placeholder in outer chunks.

1.3.0 pl
==============
- [mFilter2] Added filters "month" and "day".
- [mFilter2] Ability to use one field multiple times in filters.
- [mFilter2] Improved suggestions for more optimal processing.
- [mFilter2] Ability to set aliases for filters.
- [mFilter2] Aliases used for templates names.
- [mFilter2] Fixed suggestions for dates filters.
- [mFilter2] Fixed &showEmptyFilters in dates filters.

1.2.7 pl
==============
- [mFilter2] Fixed search with &parents parameter.

1.2.6 pl
==============
- [mSearch2] Improved simple search for additional bonuses.

1.2.5 pl
==============
- [#34] [mSearchForm] Fixed &autocomplete=`0`.

1.2.4 pl1
==============
- [mFilter2] Fixed adding new filters from build methods.
- [mFilter2] Fixed possible E_NOTICE.

1.2.3 pl2
==============
- [#33] [mFilter2] Fixed build of TVs filters.
- [mFilter2] Fixed limit on search.
- [mFilter2] Fixed displaying of empty filters on page.

1.2.2 pl
==============
- [mFilter2] Fixed display order of specified &filters.
- [Main] Removed register of jQuery on frontend.

1.2.1 pl
==============
- [mFilter2] Added support of "autotag" TVs.

1.2.0 pl
==============
- [mFilter2] Added triggering of jQuery event "mse2_load".
- [mFilter2] Added support of pdoTools 1.10.
- [mFilter2] Added filter "decimal".
- [mFilter2] Fixed default javascript for decimal values in slider.
- [mFilter2] Fixed search in filter.

1.2.0 rc1
==============
- [mFilter2] Ability to add new filters from build methods.
- [mFilter2] Support of special options of miniShop2 products in "key==value" format.

1.1.5 pl1
==============
- [#11] Added support of msVendor.
- Improved processing of tags in quick search.

1.1.4 pl1
==============
- Fixed pagination links in ajax requests.

1.1.3 pl
==============
- Improved indexing manager page.

1.1.2 pl
==============
- [mSearch2] Fixed parameter &toPlaceholder.

1.1.1 pl
==============
- Changed sort of parents filters to menuindex.
- Fixed autocomplete when unpublished resources are found.
- Fixed retrieving of resource fields.

1.1.0 pl
==============
- Improved search index and algorithm.
- Ability to specify indexed fields for search by parameter &fields=``.
- Ability to disable additional results by LIKE search by parameter &onlyIndex=``.
- Fixed loading Font Awesome.
- Added support of AjaxManager.
- [#30] [mSearch2] Added "not found" message when results are limited by snippet parameters.
- [#29] Returned lost button "Remove all queries".
- [#27] Added ability to specify properties set in element and paginator name.
- [#25] Added select filters.
- [#24] [mFilter2] Added filtering of negative numbers in slider.
- [#23] Added placeholder "results" to &toSeparatePlaceholders=`1` mode.
- Fixed ajax filtering with &toSeparatePlaceholders=`1`.
- Improved snippet mSearch2 when &returnIds=`1`.

1.0.4 pl
==============
- Improved UI for MODX 2.3.
- Added Font Awesome icons.
- Added ability to install new dictionary by double click on grid row.
- Improved chunks.

1.0.3 pl
==============
- [#21] Added support filtering by date for TV of type date.
- [#20] All templates of filters are converted to lowercase.

1.0.2 pl
==============
- [#14] Changed build filters methods.
- Fixed E_NOTICE in mFilter2.

1.0.1 pl
==============
- [#14] Added passing of the filter name in the method of build.
- Improved support of TVs with type "listbox" and "tag".
- Do not call highlight method on search results if query is empty.

1.0.0 pl1
==============
- [#10] [mFilter2] Fixed bug with sort in Safari and Firefox.
- [#9] [mFilter2] Added set of placeholder "mse2_filters_count".
- Improved load if pdoFetch class.
- Fixed possible incorrect characters in the English dictionary.
- Added manager page with dictionaries.
- Added new snippet "mSearchForm" with autocomplete.
- Improved registering of frontend scripts.
- Fixed replacement of aliases in the search query.
- Improved javascript slider
- Fixed overwriting parameters &sortby and &sortdir. Parameter &sort has priority.

1.0.0 beta2
==============
- Fixed [[+total]] placeholder for new pdoPage versions.
- More convenient suggestions.
- Added filter "grandparents".
- Added ability to update chunks on package upgrade.
- Added manager page with words aliases.
- Added manager page with search queries.
- Improved mSearch2::Search() for aliases support.
- Improved mSearch2::Highlight() for more exact cutting of text.
- Enabling of parameter "showLog" of snippets displays also log of search.
- Added system parameter "like_match_bonus".
- Fixed possible warnings when word from dictionary has incorrect symbols.

0.9.1 pl2
==============
- Improved verification of search query.
- [mSearch2] Parameter "forceSearch" enabled by default.

0.9.0 pl
==============
- [mFilter2] Changed default &paginator=`` to "pdoPage".
- [mFilter2] Improved filtration of conditions for retrieve resources. Now it handle end snippet with parameter &returnIds=`1`.
- [mSearch2] Optimized for last version of pdoTools.
- [mSearch2] Added parameter "forceSearch" to specify whether or not to show list of resources without search query.
- Improved javascript. Hide of block "limit" when no results.
- Improved speed of mseFiltersHandler2::filterDate().
- Default chunks support Bootstrap3.
- Fixed context switch in action.php

0.8.4 pl
==============
- Added filter by year of document. For example: "publishedon:year".
- Improved search algorithm, when there is only one word in query.
- Improved buildParentsFilter(). Now it works for parents from different contexts.
- Added support of placeholders [^q^] and [^qt^].

0.8.3 pl2
==============
- Improved check of "limit" parameter.

0.8.3 pl2
==============
- Returned missed function "implode_r" into index processor.

0.8.3 pl1
==============
- [mSearch2] Improved search algorithm.
- [mFilter2] Fixed processing parameters of snippet.

0.8.2 pl1
==============
- [mFilter2] If no results, message about it will be returned in "&tplOuter=``".

0.8.2 pl
==============
- [mFilter2] Fixed work with MS2 multicategories.
- [mFilter2] Improved working with search results.
- [mSearch2] Improved search algorithm.

0.8.1 pl1
==============
- [mFilter2] Improved work with modified &queryVar=`` and &parentsVar=``.
- [mFilter2] Improved return of error messages, when nothing found.
- [mFilter2] Improved work with limit, when page loaded by direct link.
- [mFilter2] Improved sort links.
- [mFilter2] Array with config for frontend is now available as placeholders with prefix "mse2_". E.g. [[+mse2_start_sort]], [[+mse2_tpls]] etc.

0.8.0 pl
==============
- [#7] You can prefix ids in "&resources=``" and "&parents=``" with dash for excluding from query.
- [#5] Added parameter "&toSeparatePlaceholders=``" to snippet mFilter2. Parameter "&toPlaceholder" renamed to "&toPlaceholders".
- Fixed issues when parents not in current contexts.
- Added parameter "&hideContainers=``" to both snippets.
- Added parameters "&tplWrapper=``" and "&wrapIfEmpty=``" to snippet mSearch2.
- Accelerated method mse2FiltersHandler::filterNumber().
- Fixed bug in filters, when TVs has capital letters in the name.
- [mFilter2] Added default implementation of "limit" parameter.
- [mFilter2] Added default implementation of range slider.
- [mFilter2] Added default implementation of list of selected inputs.
- Method "mSearch2.load()" in default javascript can receive filter parameters and callback function.

0.7.0 pl
==============
- Added support for list-style TVs.
- Fixed issues with pdoTools installation.

0.6.2 pl2
==============
- [mFilter2] New parameter "tpls" for change tpl of rows in request.
- [mFilter2] Fixed warning in log when no MS2 installed.
- [mFilter2] Fixed cache problem when retrieving products in multicategories, again.

0.6.1 pl
==============
- [mFilter2] Added support of old browsers without history api. They will use hash in url.

0.6.1 rc1
==============
- Added method mse2FiltersHandler::buildCategoriesFilter().
- Added method mse2FiltersHandler::buildFullnameFilter().
- Added ability to work with mSearch1 for smooth upgrade.
- Fixed bug with installation when "archive_with" setting is enabled.
- Improved work with MS2 multi categories.
- Fixed sort of filter values in ascending order.

0.6.0 beta
==============
- System setting "mse2_index_min_words_length" is set to 4 by default, for exclude prepositions.
- Numbers with length >= 2 are always in search, no matter what set in "mse2_index_min_words_length".
- Now mSearch2::getSuggestions() can be overloaded in class mse2FiltersHandler.
- [mFilter2] Added support for MS2 multi categories.
- [mFilter2] Added support for specify limit.
- [mFilter2] Added parameter "toPlaceholder".
- [mFilter2] Parameter "disableSuggestions" is now boolean "suggestions".
- [mFilter2] Added parameter "suggestionsMaxResults" for disable suggestions when too many results.
- [mFilter2] Added parameter "suggestionsMaxFilters" for disable suggestions when too many filters.
- [mFilter2] Added parameter "suggestionsRadio" for radio filters.
- [mFilter2] Added chunk "tpl.mFilter2.filter.radio".
- [mFilter2] Added parameters: "filter_delimeter", "method_delimeter" and "values_delimeter".
- [mFilter2] Added saving of weight of found resources, if used snippet mSearch2 for display items.
- [mSearch2] Parameter "resources" now can take a JSON string with id as a key, and weight as a value.
- [mSearch2] Added total number of filter operations in log.
- Speed improvements.

0.5.1 pl2
==============
- Fixed work with "&includeTVs" when snippet mFilter2 calls snippet mSearch2.
- Added verification for non existing filter methods.
- Filter speed improvements.

0.5.1 pl1
==============
- Added excluding not searchable resources from index.
- Small improvements of default javascript.

0.5.1 beta2
==============
- Added msFiltersHandler::getMsOptionValues() method. You can use &filters=`msoption|size,msoption|color` now.
- Added update of main filter log on ajax requests, if enabled.
- Added parameter "disableSuggestions" for very fast filtration. if enabled, you will not see small numbers next to the filter parameters.
- Improved indexing. It is recommended to update the search index manually.

0.5.0 beta2
==============
- Added snippet mFilter2
- Added default javascript
- Added default css

0.4.0 beta
==============
- Improved search algorithm. Added %LIKE% search for words, that was not found in index.
- Improved highlight of search results for %LIKE% results.

0.3.0 beta1
==============
- Fixed snippet offset bug

0.3.0 beta
==============
- Improved search algorithm
- Improved highlight of search results
- Improved search snippet

0.2.0
==============
- Added manager pages
- Added indexing plugin

0.1.0
==============
- Initial release with relevant morphological search.',
    'license' => 'GNU GENERAL PUBLIC LICENSE
   Version 2, June 1991
--------------------------

Copyright (C) 1989, 1991 Free Software Foundation, Inc.
59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Everyone is permitted to copy and distribute verbatim copies
of this license document, but changing it is not allowed.

Preamble
--------

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation\'s software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author\'s protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors\' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone\'s free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.


GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
---------------------------------------------------------------

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program\'s
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients\' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

NO WARRANTY
-----------

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

---------------------------
END OF TERMS AND CONDITIONS',
    'readme' => '--------------------
mSearch2
--------------------
Author: Vasily Naumkin <bezumkin@yandex.ru>
--------------------

Feel free to suggest ideas/improvements/bugs on GitHub:
http://github.com/bezumkin/mSearch2/issues',
    'chunks' => 
    array (
      'tpl.mSearch2.row' => '<div class="mse2-row">
	[[+idx]]. <a href="[[+uri]]" class="search-link">[[+pagetitle]]</a>[[+weight]]
	[[+intro]]
</div>
<!--msearch2_weight  ([[%mse2_weight]]: [[+weight]])-->
<!--msearch2_intro <p>[[+intro]]</p>-->',
      'tpl.mSearch2.form' => '<form action="[[~[[+pageId]]]]" method="get" class="well msearch2" id="mse2_form">
	<div class="row">
		<div class="form-group col-md-10">
			<input type="text" class="form-control" name="[[+queryVar]]" placeholder="[[%mse2_search]]" value="[[+mse2_query]]" />
		</div>
		<button type="submit" class="btn btn-default">
			<i class="glyphicon glyphicon-search"></i> [[%search]]
		</button>
	</div>
</form>',
      'tpl.mSearch2.ac' => '<div class="mse2-ac-item">
	[[+idx]]. [[+pagetitle]] [[+weight]]
	[[+intro]]
</div>
<!--msearch2_weight <span class="mse2-ac-weight"><small>[[%mse2_weight]]: [[+weight]]</small></span>-->
<!--msearch2_intro <br/><small>[[+intro]]</small>-->',
      'tpl.mFilter2.outer' => '<div class="row msearch2" id="mse2_mfilter">
	<div class="span3 col-md-3">
		<form action="" method="post" id="mse2_filters">
			[[+filters]]
		</form>

		<br/>
		<div>[[%mse2_limit]]
			<select name="mse_limit" id="mse2_limit">
				<option value="10" [[+limit:is=`10`:then=`selected`]]>10</option>
				<option value="25" [[+limit:is=`25`:then=`selected`]]>25</option>
				<option value="50" [[+limit:is=`50`:then=`selected`]]>50</option>
				<option value="100" [[+limit:is=`100`:then=`selected`]]>100</option>
			</select>
		</div>
	</div>

	<div class="span9 col-md-9">
		<h3>[[%mse2_filter_total]] <span id="mse2_total">[[+total:default=`0`]]</span></h3>

		<div class="row">
			<div id="mse2_sort" class="span5 col-md-5">
				[[%mse2_sort]]
				<a href="#" data-sort="resource|publishedon" data-dir="[[+mse2_sort:is=`resource|publishedon:desc`:then=`desc`]]" data-default="desc" class="sort">[[%mse2_sort_publishedon]] <span></span></a>
			</div>

			[[+tpls:notempty=`
			<div id="mse2_tpl" class="span4 col-md-4">
				<a href="#" data-tpl="0" class="[[+tpl0]]">[[%mse2_chunk_default]]</a> /
				<a href="#" data-tpl="1" class="[[+tpl1]]">[[%mse2_chunk_alternate]]</a>
			</div>
			`]]
		</div>

		<div id="mse2_selected_wrapper">
			<div id="mse2_selected">[[%mse2_selected]]:
				<span></span>
			</div>
		</div>

		<div id="mse2_results">
			[[+results]]
		</div>

		<div class="pagination">
			<ul id="mse2_pagination">
				[[!+page.nav]]
			</ul>
		</div>

	</div>
</div>',
      'tpl.mFilter2.filter.outer' => '<fieldset id="mse2_[[+table]][[+delimeter]][[+filter]]">
	<h4>[[%mse2_filter_[[+table]]_[[+filter]]]]</h4>
	[[+rows]]
</fieldset>',
      'tpl.mFilter2.filter.slider' => '<fieldset id="mse2_[[+table]][[+delimeter]][[+filter]]">
	<h4>[[%mse2_filter_[[+table]]_[[+filter]]]]</h4>
	<div class="mse2_number_slider"></div>
	<div class="mse2_number_inputs">
		[[+rows]]
	</div>
</fieldset>',
      'tpl.mFilter2.filter.select' => '<fieldset id="mse2_[[+table]][[+delimeter]][[+filter]]">
	<h4>[[%mse2_filter_[[+table]]_[[+filter]]]]</h4>
	<select name="[[+filter_key]]" id="[[+table]][[+delimeter]][[+filter]]_0">
		<option value="" selected>[[%mse2_select]]</option>
		[[+rows]]
	</select>
</fieldset>',
      'tpl.mFilter2.filter.checkbox' => '<label for="mse2_[[+table]][[+delimeter]][[+filter]]_[[+idx]]" class="[[+disabled]]">
	<input type="checkbox" name="[[+filter_key]]" id="mse2_[[+table]][[+delimeter]][[+filter]]_[[+idx]]" value="[[+value]]" [[+checked]] [[+disabled]]/> [[+title]] <sup>[[+num]]</sup>
</label><br/>',
      'tpl.mFilter2.filter.number' => '<div class="form-group col-md-6">
	<label for="mse2_[[+table]][[+delimeter]][[+filter]]_[[+idx]]">[[+title]]
		<input type="input" name="[[+filter_key]]" id="mse2_[[+table]][[+delimeter]][[+filter]]_[[+idx]]" value="[[+value]]" class="form-control input-sm" />
	</label>
</div>',
      'tpl.mFilter2.filter.radio' => '<label for="mse2_[[+table]][[+delimeter]][[+filter]]_[[+idx]]" class="[[+disabled]]">
	<input type="radio" name="[[+filter_key]]" id="mse2_[[+table]][[+delimeter]][[+filter]]_[[+idx]]" value="[[+value]]" [[+checked]] [[+disabled]]/> [[+title]] <sup>[[+num]]</sup>
</label><br/>',
      'tpl.mFilter2.filter.option' => '<option value="[[+value]]" [[+selected]] [[+disabled]] class="[[+disabled]]">[[+title]]&nbsp;[[+num]]</option>

<!--pdotools_num ([[+num]])-->',
    ),
    'setup-options' => 'msearch2-1.3.4-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'e7f8d15829a2b58aac337938ee93323e',
      'native_key' => 'msearch2',
      'filename' => 'modNamespace/f3ab1ed741c09457c4b86ff6097f47a7.vehicle',
      'namespace' => 'msearch2',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5afa1fcbe7ed546701226ff727fdc693',
      'native_key' => 'mse2_frontend_css',
      'filename' => 'modSystemSetting/26201c7e2a7dc40425a547dc264b0367.vehicle',
      'namespace' => 'msearch2',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2d6810791a51448c8e141062f37d758f',
      'native_key' => 'mse2_frontend_js',
      'filename' => 'modSystemSetting/4a73112d774ccbf9e9c3e136d298c6a4.vehicle',
      'namespace' => 'msearch2',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '338b3d912781551b94d33d9caa8ac707',
      'native_key' => 'mse2_index_fields',
      'filename' => 'modSystemSetting/102dfe3a5069b56cf270566ed3373720.vehicle',
      'namespace' => 'msearch2',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5908c9602db6336f91ecb6c53a6a6c03',
      'native_key' => 'mse2_index_comments',
      'filename' => 'modSystemSetting/2893055ed17d3b5b463f7ea024f00077.vehicle',
      'namespace' => 'msearch2',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0e8c52d3a91432785a852aa4f581477b',
      'native_key' => 'mse2_index_comments_weight',
      'filename' => 'modSystemSetting/35ed4f7d596879856a7a98c2c80a4fd6.vehicle',
      'namespace' => 'msearch2',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'da3e69b9eabe09d3f25fb4972213f7de',
      'native_key' => 'mse2_index_min_words_length',
      'filename' => 'modSystemSetting/cca69ec332ee3bfa5cf0ccbb731dcf15.vehicle',
      'namespace' => 'msearch2',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b56172ed61958da3f0c6570540f428b7',
      'native_key' => 'mse2_index_all',
      'filename' => 'modSystemSetting/8d8a5f9a0739fac273baf6c444b70484.vehicle',
      'namespace' => 'msearch2',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e5ab20b6d53104ba35cc951c831fdfc2',
      'native_key' => 'mse2_index_split_words',
      'filename' => 'modSystemSetting/10c784ab23a11560600f4e21147f0987.vehicle',
      'namespace' => 'msearch2',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6b2a1c7848a7ce04fcd407bdad7ae3ec',
      'native_key' => 'mse2_search_exact_match_bonus',
      'filename' => 'modSystemSetting/00262fa1bd3cd20e54882e426f7e2a5a.vehicle',
      'namespace' => 'msearch2',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b29a5bfbdce145a5c6abb8a0f5727c1e',
      'native_key' => 'mse2_search_all_words_bonus',
      'filename' => 'modSystemSetting/2ee10bfef204b8ae2fa2b48d14e536c6.vehicle',
      'namespace' => 'msearch2',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'fff6e9087af96edbe9f88c663100ab84',
      'native_key' => 'mse2_search_like_match_bonus',
      'filename' => 'modSystemSetting/c659e7c6821ad834aa41ec3e6e8a8a9c.vehicle',
      'namespace' => 'msearch2',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0c726e6c722caf086a94ef1ae3d79eb3',
      'native_key' => 'mse2_search_split_words',
      'filename' => 'modSystemSetting/47d6c6926351c497b69b4e550ab6d8be.vehicle',
      'namespace' => 'msearch2',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4f47d06717043d3776f2f7f0765335f4',
      'native_key' => 'mse2_filters_handler_class',
      'filename' => 'modSystemSetting/1d8075e9c98b5a2b6d4de4073e6c59b3.vehicle',
      'namespace' => 'msearch2',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '4a0bab200549dbbc716bfc573f714409',
      'native_key' => 'msearch2',
      'filename' => 'modMenu/6a58c49394bd18ea2f52e05abab10f51.vehicle',
      'namespace' => 'msearch2',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '7d1f0b3103244f45a70127dc8737d7a3',
      'native_key' => 1,
      'filename' => 'modCategory/c14e91271d3a7938d482b18c62d97024.vehicle',
      'namespace' => 'msearch2',
    ),
  ),
);