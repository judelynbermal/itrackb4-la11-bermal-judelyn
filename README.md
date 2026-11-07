
# Part G · README

## G1. Route model binding needs two things to be true. Name both, and say what happens when only one of them is

Two things must be true: the route parameter name must match the controller parameter name (`{food}` and `$food`), and the parameter must be type-hinted with the model (`Food $food`). If the type-hint is there but the names don't match (for example `Food $foods` with `{food}`), Laravel can't bind the record and gives an empty `Food` object, so every field shows blank. If the names match but there is no type-hint, you only get the raw ID string instead of the model.

## G2. Your Delete link opened the detail page instead of deleting anything. Explain why.

A link can only send a GET request. The destroy route answers DELETE at `/foods/{food}`, but a GET to that same address matches the `show` route, so the browser opened the detail page and nothing was deleted. No error appears because the request is valid, just for a different route.

## G3. old() takes a second argument on your edit form. What would break if you left it out, and what would break if you used only it?

If the second argument were left out, the edit form would open with empty fields, because there is no old input yet and nothing supplies the record's current values. If only the second argument were used (just `$food->name` with no `old()`), a failed validation would reset every field to the saved database value and the user would lose what they just typed.
