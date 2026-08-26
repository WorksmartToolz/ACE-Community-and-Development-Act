# Alliance for Collective Empowerment and Development (ACE)

**"We are not asking for a seat at the table. We are building our own."**
Leandre Poplus, Founder

---

## Repository Overview

This repository contains the full legislative, documentary, and outreach infrastructure for the Alliance for Collective Empowerment and Development (ACE): a 25-year initiative to establish a network of self-governing, self-sustaining cities for Black and Native American communities on tribal sovereign land.

**Production site:** https://acecommunities.org
**Staging site:** https://mediumvioletred-dog-831483.hostingersite.com

---

## Repository Structure

```
ACE-Community-and-Development-Act/
├── README.md
├── ACE_CONTEXT.md
├── documents/
│   ├── docx/                                         ← all .docx files live here
│   │   ├── ACE_Community_and_Development_Act_v3_4_2026-06.docx
│   │   ├── ACE_Founding_Position_v1.3_2026-06.docx
│   │   ├── ACE_Reform_Was_the_Trap_v1_6_2026-06.docx
│   │   ├── ACE_Executive_Summary_v2.1_2026-06.docx
│   │   ├── ACE_Outreach_Package_v2_0_2026-06.docx
│   │   ├── President_Barack_Obama_v3_3_2026-06.docx
│   │   └── Minister_Louis_Farrakhan_v3_3_2026-06.docx
│   ├── ACE_Community_and_Development_Act_v3_4_2026-06.pdf   ← only PDFs in root
│   ├── ACE_Founding_Position_v1.3_2026-06.pdf
│   ├── ACE_Reform_Was_the_Trap_v1_6_2026-06.pdf
│   ├── ACE_Executive_Summary_v2.1_2026-06.pdf
│   ├── ACE_Outreach_Package_v2_0_2026-06.pdf
│   ├── President_Barack_Obama_v3_3_2026-06.pdf
│   └── Minister_Louis_Farrakhan_v3_3_2026-06.pdf
├── landing/
│   ├── index_v9_11_2026-06.html
│   ├── react_v1_3_2026-06.html
│   ├── crest_v2_2026-06.svg
│   └── crest_v2_2026-06.png
├── legal/
│   ├── docx/
│   │   ├── ACE_BATEI_Legal_Brief_v1.2_2026-06.docx
│   │   ├── ACE_Jurisdictional_Sovereignty_Brief_v1.0_2026-06.docx
│   │   ├── ACE_Pharma_Review_Board_Brief_v1.0_2026-06.docx
│   │   ├── ACE_Title_XXI_Contingency_Brief_v1.3_2026-06.docx
│   │   └── ACE_UN_Submission_CERD_Reparations_v1.1_2026-06.docx
│   ├── ACE_BATEI_Legal_Brief_v1.2_2026-06.pdf
│   ├── ACE_Jurisdictional_Sovereignty_Brief_v1.0_2026-06.pdf
│   ├── ACE_Pharma_Review_Board_Brief_v1.0_2026-06.pdf
│   ├── ACE_Title_XXI_Contingency_Brief_v1.3_2026-06.pdf
│   └── ACE_UN_Submission_CERD_Reparations_v1.1_2026-06.pdf
├── server/                        ← server-side PHP files
│   └── submit_v1_3_2026-06.php      ← form handler: Get Involved routes to submissions.csv, React routes to reactions.csv (v1.3 adds ACE Act Access Request routing to founders@ and the open-ended Additional Thoughts field)
├── active-versions/               ← latest version of every document, always current
│   └── (current PDFs only — see Current Versioning State in ACE_CONTEXT.md)
└── onepagers/
    ├── ACE_OnePager_Obama_Tier0_v1.0_2026-06.docx
    ├── ACE_OnePager_Tier1_Wealth_v1.0_2026-06.docx
    ├── ACE_OnePager_Tier2_Ideology_v1.0_2026-06.docx
    ├── ACE_OnePager_Tier3_Ministry_v1.0_2026-06.docx
    └── ACE_OnePager_Covers_v1.5_2026-06.pdf
```

---

## Core Documents

### ACE Act v3.4
The full legislative framework: 22 Titles. Advanced from v1.9 through v3.3 across commits `978b409`, `793e4d9`, `21bb907` (v2.0–v3.1), and `5b040be` (v3.2–v3.3), then to v3.4 (commits `6972fbc`/`99ea9b1`) in the final pre-delivery review pass, which restored a missing Title V section heading (its content was present but the heading itself had vanished, causing the document to jump from Sec. 404 to Sec. 501 with no Title V banner) and removed six em dashes. Renamed from the old short filename convention (`ACE_Act_vX.X`) to the full `ACE_Community_and_Development_Act_vX.X` convention, matching the actual exported filenames and the live Hostinger production URL pattern. Adds Title XXI (ACE Sovereign Territory Act, 33.15 million acres across 10 BLM states) and Title XXII (Human Rights Doctrine). WHY ACE EXISTS renamed to WHY ACE HAD TO BE BUILT throughout, with the Maryland Doctrine of Exclusion (1638) opening the section in bold italics.

### ACE Executive Summary v2.1
A condensed presentation of the full ACE vision, strategic logic, funding philosophy, and social contract for distribution to aligned stakeholders. Advanced from v1.9 to v2.1 (commit `8c456f3`): WHY ACE HAD TO BE BUILT renamed and reframed, Maryland Doctrine of 1638 added in bold italics, 33.15 million acre contingency land claim added with full per-person derivation. References ACE Act v3.4.

### ACE Founding Position v1.3
Advanced from v1.2 (commit `5b040be`).

### Reform Was the Trap v1.6
Public-awareness companion document (commit `9896ade`), added as a shorter, shareable counterpart to the 100+ page ACE Act. Titled "Reform Was the Trap" with subtitle "The Case for Building." Opens on a "What Lies Beneath" section anchored to the persistence of Black America's condition since Bloody Sunday at Selma, then argues three principles: a system designed to exclude cannot be reformed into one that includes; the architecture of Black subordination is a structure to escape, not an oversight to correct; and the path to dignity is the construction of new institutions built by Black people for Black people. Includes the framework's canonical hearts-and-law passage ("The law can change. The man holding the law does not have to.") and an evergreen, un-named critique of "return to greatness" rhetoric. Written in the Founding Position's declarative voice, no em dashes, crest on cover (white-paper brown-banner treatment), 5 pages. Points readers to the Founding Position for the deeper historical foundation. Version history within the working session: v1.0 draft, v1.1 crest and opening heading, v1.2 title, v1.3 hearts/law passage, v1.4 greatness-for-whom passage, v1.5 rewritten opening, v1.6 Selma anchor and "What Lies Beneath" heading (the version pushed).

### ACE Outreach Package v2.0
The complete physical outreach package delivered by FedEx to priority targets across four tiers. Advanced from v1.9 to v2.0 (commit `b301f6b`, built in an earlier session but not actually pushed until this one):
- Tier 0 (Obama) and Tier 2 (Farrakhan): fully replaced with the approved v3.1-era standalone letter content, restructured to salutation → intro → WHY ACE HAD TO BE BUILT → THE ASK → Supporting Legal Documentation → Direct Contact. "A NOTE FROM THE FOUNDER" heading removed. Legal brief citations inside these tiers corrected to Title XXI v1.3 and UN Submission v1.1 to match what's actually current.
- Tier 1 (Investment Proposal) and Tier 3 (Community Ministry): mechanical sync only, per founder direction — WHY ACE EXISTS renamed to WHY ACE HAD TO BE BUILT with the Maryland Doctrine quote added, "20 Titles" and "constitutional framework we wrote ourselves" phrasing corrected. Persuasive copy and structure otherwise untouched; these two tiers still need their own full standalone-letter treatment (see Outstanding Items).
- Package-wide version stamp bumped from v1.9 to v2.0 in all four mini-covers.

Note: an earlier attempt at this update added the Maryland Doctrine quote to Tier 0/Tier 2 and moved their version stamps backward from v3.1 to a package-wide v3.0; both were unauthorized changes caught and reverted before anything was pushed. The v2.0 described above is the corrected version.

### Obama Letter v3.3 and Farrakhan Letter v3.3
Advanced from v3.1 to v3.2 (commit `5b040be`), then to v3.3 (commits `6972fbc`/`99ea9b1`) in the final pre-delivery review pass: both letters had two stale legal brief citations corrected (Companion Legal Brief to v1.3, UN Submission CERD to v1.1) and a double-space typo fixed. The Farrakhan letter additionally had a duplicated sentence removed (the "we are not asking you to become ACE" line appeared twice straddling the THE ASK heading) and a duplicated word fixed ("tribal sovereign land land").

---

## Legal Briefs (Internal — Pending Counsel Review)

Three companion legal briefs pre-arguing ACE's most legally challengeable provisions. For internal use only pending review by tribal sovereignty and constitutional counsel.

| Brief | Version | Subject |
|---|---|---|
| BATEI Legal Brief | v1.2 | Black American Tax Equity Initiative |
| Jurisdictional Sovereignty Brief | v1.0 | Tribal land jurisdiction claims |
| Pharmaceutical Review Board Brief | v1.0 | ACE Pharma Board authority |
| Title XXI Contingency Brief | v1.3 | Tribal Partnership Contingency Framework: three anticipated challenges, Continuity Doctrine, ACE Sovereign Territory Act. Acreage updated from 10 million to 33.15 million throughout (commit `9495cad`) to match ACE Act v3.1+. Appendix B's per-state fraction-of-holdings claim corrected after the founder flagged an unauthorized reframing (the "small fraction" language was measuring against the wrong baseline). Section III adds the 2-billion-acre / 51-million-population comparison the founder requested, showing the 33.15M ask is under 2% of what full honor of the 1865 forty-acre promise would require at today's population. |
| UN Submission — CERD Reparations | v1.1 | Standalone submission to CERD's General Recommendation process on reparations for chattel enslavement: seven sections, five specific requests, parallel Special Procedures track identified. Version stamp added to cover (commit `9aa00a8`); no content changes. Special Rapporteur citation (Ms. Ashwini K.P., HRC resolution 61/35) verified accurate and current against the live OHCHR site. |

---

## Landing Page

Live at https://acecommunities.org (SSL confirmed). Current version: v9.11.

Features: crest v2, Why ACE Had to Be Built section, Contingency Framework section (parallel land claim track, two-track SWOT grid, Continuity Doctrine), role-tagged Get Involved form, document table with PDF links to current public documents (Founding Position v1.3, Executive Summary v2.1), footer with direct PDF links, "React to the Plan" links (nav, document table CTA, footer), share section, email capture routing to founders@ and info@ via submit.php v1.3. The ACE Act was pulled from public download (v9.6): its document-table row now shows an "Internal" badge and a "Request Access" button that routes through the working signup form (data-role "ACE Act Access Request"), tagged to founders@ priority routing, with a specific confirmation message and a submit button that changes to "Request the ACE Act" on that path. The document table stacks into full-width cards below 600px for mobile (v9.10). The duplicate ACE Act text link was removed from the nav, leaving only the button (v9.11).

The standalone React feedback page (`react_v1_3_2026-06.html`, live at /react) had its three stale hero doc-buttons removed and an open-ended "Anything else on your mind?" free-text field added (v1.2), then had a phone number removed from its footer that had been present since creation in violation of the standing rule that the number appears only in the two private outreach letters (v1.3).

**Note on GitHub Pages:** GitHub Pages was discovered enabled in the repository's own Settings, publicly serving repo contents at a github.io URL despite the repository being private (Pages visibility restriction requires GitHub Enterprise, which this repo does not have). The founder confirmed no collaborators besides themselves have ever had repo access, ruling out unauthorized access as the cause; this was most likely a setting toggled unintentionally at some point and never revisited. The site has been unpublished and the Pages source set to None, fully disabling it. This required no code changes and did not affect Hostinger, which remains the actual production host.

---

## Key Principles (Non-Negotiable)

- **MLP** = Majority Lending Program (never Minority)
- **MLI** = Majority Lending Institution (never Minority)
- **Full name** always includes "and Development"
- **ACE Congressional Caucus** is ACE's own independent body
- **Government grants** are supplementary only, never foundational
- **BATEI** exemption follows the person, not the location
- **Food policy** framing is always public health evidence, never religious doctrine
- **No em dashes** in any reader-facing text

---

## README Version Log

| Version | Change |
|---|---|
| v17 | PDF hosting links corrected |
| v18 | BATEI brief added, landing page updated to v8.5 |
| v19 | BATEI brief noted as internal legal document |
| v20 | Jurisdictional Sovereignty brief added |
| v21 | Pharmaceutical Review Board brief added |
| v22 | Outreach Package v1.9 added: Founder's note, Why ACE Exists sections, Michelle Obama acknowledgment, individual one-pager PDFs |
| v23 | ACE Act updated to v1.8: Title XXI (Tribal Partnership Contingency Framework) added; Executive Summary updated to v1.8 to reflect the contingency land claim alongside the tribal partnership track |
| v24 | Landing page updated to v8.11: stats bar, Phase Two, and document table updated to reflect both the tribal partnership track and the contingency land claim; ACE Act and Executive Summary version references updated to v1.8 |
| v25 | Landing page v8.12: PDF URLs corrected to match exact Hostinger filenames (underscores, no spaces) |
| v26 | Landing page v8.13: Contingency Framework section added with nav link; footer fixed (Contingency Framework link added to The Alliance column, duplicate Founding Documents removed, The Charter column links direct to PDFs) |
| v27 | Title XXI Companion Legal Brief v1.0 added: pre-argues three anticipated challenges to the Tribal Partnership Contingency Framework and the proposed ACE Sovereign Territory Act |
| v28 | ACE Act updated to v1.9: Title XXII (The Human Rights Doctrine) added in full — civil rights/human rights distinction, Dred Scott foundation, ICERD/ICCPR/UDHR grounding, four-track international engagement strategy, ACE Human Rights Commission established |
| v29 | ACE Act v1.9 pushed (docx + pdf); landing page v8.14: ACE Act document table and footer updated to v1.9 filename |
| v30 | Executive Summary updated to v1.9: Human Rights Doctrine section added |
| v31 | Landing page v8.15: Human Rights Doctrine section added in plain language with nav link and footer entry |
| v32 | Landing page v8.16: Executive Summary document table and footer updated to v1.9 |
| v33 | UN Submission document v1.0 added: standalone CERD submission on reparations for chattel enslavement, 10 pages, 7 sections, 5 specific requests to the Committee |
| v34 | Repo reorganized: all docx files moved to docx/ subfolders in documents/ and legal/; missing PDFs added (Title XXI Contingency Brief, UN Submission) |
| v35 | Landing page v8.17: Maryland Doctrine of Exclusion added to Why ACE Had to Be Built section (renamed from Why ACE Exists); section title updated throughout |
| v36 | One-pagers Obama v1.1 and Farrakhan Tier 2 v1.1: em dashes removed, 22 Titles updated, supporting legal documentation list added, direct contact block added (951-323-7942) |
| v37 | Obama and Farrakhan full letters v2.0: 22 Titles, supporting legal documentation list (Contingency Brief, UN Submission), direct contact 951-323-7942 added to both |
| v38 | Landing page v8.18: nav labels shortened (Why ACE Had to Be Built to Why ACE, What ACE is Building to What We Build, The Contingency Framework to The Contingency, The Human Rights Doctrine to Human Rights) |
| v39 | Obama and Farrakhan letters updated to v2.1; active-versions folder created with latest version of every document |
| v40 | Landing page v8.19: The Contingency section first paragraph updated to name both paths before referencing them; README v40 |
| v41 | The Founding Position v1.2 added (docx + pdf): crest added to cover, Why ACE Is Arrival section fully revised with approved political/institutional argument |
| v42 | Landing page v8.18: nav labels shortened across all sections |
| v43 | Landing page v8.20: Maryland Doctrine exact quote bold italic, both threats named in why-close paragraph |
| v44 | Farrakhan letter updated to v2.2: typo fix |
| v45 | Landing page v8.21: The Founding Position added to document table and footer |
| v46 | Landing page v8.22: document table reordered to Founding Position, Executive Summary, The ACE Act |
| v47 | React to the Plan page v1.0 created; landing page v8.23: React link added to nav and document table CTA |
| v48 | Landing page v8.24: duplicate ACE Act text link removed from nav, button retained |
| ~~v49~~ | *Drafted only — not confirmed as a standalone push. Content: submit.php v1.1 added to server/ folder; React page phone number removed. May have been absorbed into commits `978b409`/`793e4d9` (ACE Act v2.0), but those commit messages make no mention of submit.php or the React page, so this content's actual landed state in the repo is unverified. Flagging rather than asserting.* |
| v50 | **Confirmed — commit `75cfcfe`.** ACE Act v2.0 pushed (docx + PDF, commits `978b409` and `793e4d9`): 11 substantive additions, 9 structural fixes, 4 Phase 1 bridge sections, launch budget. Landing page v8.25: ACE Act document table updated to v2.0. |
| v51 | **Confirmed — commit `ae5ef2d`.** ACE Act version history v2.1 through v3.1 pushed (commit `21bb907`); v3.1 established as current active version: 33.15 million acres, page numbering fixed, closing provisions reordered. Landing page v8.26: ACE Act updated to v3.1. |
| ~~v52~~ | *Drafted only — never pushed.* Intended change: landing page v8.27, ACE Act PDF link corrected to `ACE_Community_and_Development_Act_v3.1.pdf`. The file `index_v8_27` was never committed; landing page went straight from v8.26 to v9.0 in the next confirmed push. The PDF link correction this entry describes did eventually happen, just folded into v9.0 rather than as its own version. |
| v53 | **Confirmed — commit `06ed392`.** Landing page v9.0: major version jump reflecting full session additions to that point. |
| v54 | **Confirmed — commit `8c456f3`.** Executive Summary v2.0 and v2.1 pushed. Landing page v9.1: Executive Summary document table updated to v2.1. |
| ~~v55~~ | *Drafted only — never pushed as standalone.* Content: Obama and Farrakhan letters at intermediate v3.0 (ACE Act v3.1 reference, 33.15M acres, 1,600+ paragraphs); active-versions cleanup. Fully superseded by v56 below, pushed in the same commit. |
| v56 | **Commit `d14220b` — see note below.** Commit message states: Obama v3.1 and Farrakhan v3.1 letters finalized (introductions added, structure reordered, WHY ACE HAD TO BE BUILT reframed, headings removed); Farrakhan v2.2 docx added; active-versions cleaned to latest only. |
| v57 | **This entry.** Verified against the actual repo: despite commit messages claiming README updates through v56, `git diff` against the live `README.md` on `main` showed **zero changes** from the v48 content above. This means README.md itself was never actually modified in commits `75cfcfe`, `ae5ef2d`, `06ed392`, `8c456f3`, `d14220b`, or `734ff51`, even though each commit message referenced a README version bump. The underlying document and landing page files referenced in those commits (ACE Act, Executive Summary, letters, landing page HTML) are separate files with their own real content diffs and were very likely genuinely updated as described; it is specifically this changelog file that silently failed to save five to six times in a row. This version log entry, and the file it lives in, is the first time the v49–v56 content has actually been written into README.md and pushed. Also folds in the active-versions/ cleanup from commit `734ff51`: superseded v1.9 outreach one-pagers (Outreach Package, Community Ministry Leaders, Investment Proposal) removed from active-versions/. |
| v58 | Title XXI Contingency Brief v1.3 pushed (commit `9495cad`): acreage updated 10M → 33.15M throughout; Appendix B fraction-of-holdings claim corrected after founder flagged an unauthorized reframing; Section III adds the 2-billion-acre / 51-million-population comparison per founder request. |
| v59 | UN Submission v1.1 pushed (commit `9aa00a8`): version stamp added to cover, no content changes. Verification pass confirmed the Special Rapporteur citation (Ashwini K.P., HRC resolution 61/35) accurate and current, and confirmed the Maryland 1638 edict quote was already correctly present (an initial automated check for the literal string "Maryland Doctrine" had incorrectly flagged this as missing — the substance was there, just not under that exact label). |
| v60 | **First attempt failed.** Commit `7c0aef4` attempted to push Founding Position v1.3, Obama v3.2, Farrakhan v3.2, and ACE Act v3.2/v3.3, but every `cp` command failed silently due to wrong assumed Downloads filenames, while the accompanying `git rm` commands for the old versions succeeded. Result: Founding Position, Obama letter, and Farrakhan letter PDFs were missing entirely from `documents/` and `active-versions/` for a period, with only docx history intact. The same commit also accidentally added a broken `landing/index_v9_2_2026-06.html` pointing to a nonexistent ACE Act filename. **Repaired in commit `5b040be`** once real filenames were confirmed via `ls` on the actual Downloads folder: Founding Position v1.3, Obama v3.2, Farrakhan v3.2, ACE Act v3.2 and v3.3 all landed correctly. ACE Act also renamed from the old short `ACE_Act` filename convention to the full `ACE_Community_and_Development_Act` convention, matching the real exported filenames and the live Hostinger URL pattern. |
| v61 | Landing page v9.3 (commit `edf9e01`): restored "React to the Plan" links (nav, document table CTA, footer) that were unintentionally dropped between v8.24 and v8.25 during the Session 10 rebuild, and had been missing from every version since, including the live v9.1. |
| v62 | Landing page v9.4 (commit `d4fddc2`): document table and footer links corrected to point to ACE Act v3.3 and Founding Position v1.3, verified directly against a screenshot of the live Hostinger file listing rather than assumed. Two earlier guesses at the correct hosted URL pattern (with vs. without date suffix) were wrong before this was confirmed against the real listing. |
| v63 | Outreach Package v2.0 pushed (commit `b301f6b`): had been built in an earlier session but never actually reached GitHub; confirmed missing via direct `git log` check and landed in this commit. Same commit removed the broken `landing/index_v9_2_2026-06.html` from v60. |
| v64 | Corrected onepager filenames in the Repository Structure documentation to match the actual files on disk: Tier 0 and Tier 2 one-pagers are v1.0, not v1.1 as previously listed. |
| v65 | **This entry.** GitHub Pages discovered enabled in repo Settings, publicly serving repo contents despite the repository being private; unpublished and source set to None. Repository Structure, Core Documents, Legal Briefs, and Landing Page sections all re-verified against the live repo (via direct clone) rather than assumed, and brought current: ACE Act v3.3, Executive Summary v2.1, Founding Position v1.3, Outreach Package v2.0, Obama and Farrakhan letters v3.2, Title XXI Contingency Brief v1.3, UN Submission v1.1, landing page v9.4. |
| v66 | Reworded the GitHub Pages line in Outstanding Items after founder flagged it as reading ambiguously — it had been listed alongside genuinely open tasks in a way that could look like the exposure was still active. Now explicitly states it's already resolved and the bullet is a standing reminder, not a pending task. |
| v67 | ACE Act advanced to v3.4, Obama and Farrakhan letters to v3.3 (commits `6972fbc` and `99ea9b1`, the latter a repair after the first attempt's combined `git add` silently failed to stage any of the three documents when a not-yet-downloaded landing page file broke the same command). Final pre-delivery review pass on the ACE Act found and fixed a missing Title V section heading (content was present, only the heading itself had vanished) and six em dashes; the Obama letter had two stale legal brief version citations; the Farrakhan letter had those same stale citations plus a duplicated sentence spanning the THE ASK heading and a duplicated word ("land land"). Landing page advanced to v9.5, updated to link the new ACE Act v3.4. |
| v68 | Landing page v9.6–v9.8 (commits `9f067cd`, `d148548`, `64122bc`): ACE Act pulled from public download per founder decision that full public exposure is premature. Document-table row changed to an "Internal" badge plus a "Request Access" button; the contradictory "published openly / free to fork" section text was corrected. The Request Access flow was first built as a mailto link, which silently failed for visitors with no default mail client configured, then rerouted through the existing signup form using a data-role tag so it uses proven infrastructure. submit.php advanced to v1.2 to route "ACE Act Access Request" submissions to founders@ instead of the general info@ inbox, and the confirmation message was made specific to the request. |
| v69 | Landing page v9.9–v9.11 (commits `a0e0cdf`, `1fd9caf`, `3ece9a1`): submit button text now changes to "Request the ACE Act" when the form is reached via the Request Access link and resets after submission; the document table stacks into full-width cards below 600px so its buttons no longer run off-screen on mobile; the duplicate "The ACE Act" text link was removed from the nav, leaving only the button. |
| v70 | React feedback page advanced to v1.2 and submit.php to v1.3 (commit `3ece9a1`): the three stale hero doc-buttons (Founding Position, Executive Summary, ACE Act, all pointing at old versions, the last contradicting the ACE Act public-download pull) were removed, and an open-ended "Anything else on your mind?" free-text field was added so respondents can leave unprompted thoughts. submit.php v1.3 wires that field through to both the notification email and the reactions.csv log. |
| v71 | Phone number 951-323-7942 removed from the React page footer across every tracked version (commits `9f3fad2`, `cb6f8ef`). It had been present since the page's creation, in violation of the standing rule that the number appears only in the two private outreach letters. The live site had already been serving the corrected v1.3 with the number removed; these commits closed the gap in the repo's own tracked files (v1.0, v1.1, and v1_2). A full repo sweep confirmed zero remaining occurrences except this changelog and the two intentional historical entries (v36, v37) documenting the number's correct placement in the letters. A permanent memory rule was added to check for this number on any public-facing file going forward. |
| v72 | Reform Was the Trap v1.6 added (commit `9896ade`): public-awareness companion document, docx source in `documents/docx/`, PDF in `documents/` and `active-versions/`. Files copied from the founder's E: drive Communication Package folder (mounted in WSL) after the standard Downloads flow came up empty, and renamed from the presentation name "1. Reform Was the Trap.pdf" to the clean versioned convention during copy. All three files verified present at correct sizes before staging and confirmed in the remote via fresh clone after push. |
| v73 | **This entry.** Full reconciliation pass after founder direction to never let documentation fall behind. Landing Page section brought current to v9.11 (was v9.5) with all v9.6–v9.11 changes, submit.php v1.3, and react page v1.2/v1.3 documented. Reform Was the Trap v1.6 added to Core Documents. Obama and Farrakhan letter headings corrected from v3.2 to v3.3. Repository Structure refreshed. Version log entries v68–v73 added. All verified against a fresh clone of the actual remote rather than assumed. |

---

## Outstanding Items

- Tier 1 outreach letter (wealth investors) — not yet drafted as a standalone letter (Outreach Package's Tier 1 section only mechanically synced, not rewritten)
- Tier 3 outreach letter (community ministry leaders) — not yet drafted as a standalone letter (same as above)
- African target outreach packages using the Founding Position — not yet started
- Farrakhan v2.2 PDF not present in documents/ (docx was pushed in `d14220b`, PDF was not) — low priority, revisit only if needed
- ACE Governing Charter — sequence-locked, cannot begin until 24 months post first Tribal Partnership Agreement
- **GitHub Pages exposure — already resolved, no action pending.** Discovered enabled and publicly serving repo contents despite the repo being private; unpublished and source set to None (see Landing Page section above and v65 in the version log). Listed here only as a standing reminder to glance at repo Settings → Pages occasionally going forward, not as an open task.

---

*For Our People, By Our People.*
*Leandre Poplus, Founder — Alliance for Collective Empowerment and Development*
