#!/usr/bin/env python3
"""
Generate Bootstrap Icons HTML for Blade templates
"""

# Read the icon list
with open('bootstrap_icons_list.txt', 'r', encoding='utf-8') as f:
    icons = [line.strip() for line in f if line.strip()]

print(f"Found {len(icons)} Bootstrap Icons")

# Generate for CREATE page
create_html = []
for icon in icons:
    html = f"""                                        <div class="icon-option {{{{ old('IconClass') == 'bi bi-{icon}' ? 'selected' : '' }}}}"
                                            data-value="bi bi-{icon}">
                                            <i class="bi bi-{icon}" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                        </div>"""
    create_html.append(html)

# Generate for EDIT page
edit_html = []
for icon in icons:
    html = f"""                                            <div class="icon-option {{{{ old('IconClass', $finding->IconClass) == 'bi bi-{icon}' ? 'selected' : '' }}}}"
                                                data-value="bi bi-{icon}">
                                                <i class="bi bi-{icon}" style="font-size: 1.2rem; color: #0d6efd;"></i>
                                            </div>"""
    edit_html.append(html)

# Save create page icons
with open('create_page_icons.html', 'w', encoding='utf-8') as f:
    f.write('\n'.join(create_html))

# Save edit page icons
with open('edit_page_icons.html', 'w', encoding='utf-8') as f:
    f.write('\n'.join(edit_html))

print("Generated HTML files:")
print("- create_page_icons.html")
print("- edit_page_icons.html")
