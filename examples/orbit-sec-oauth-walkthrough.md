# Orbit Sec Oauth Index Walkthrough

This walk-through keeps the domain vocabulary close to the data instead of burying it in prose.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 143 | ship |
| stress | claim drift | 149 | ship |
| edge | replay exposure | 210 | ship |
| recovery | policy width | 197 | ship |
| stale | trust boundary | 176 | ship |

Start with `edge` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `replay exposure` against `trust boundary`, not the raw score alone.
