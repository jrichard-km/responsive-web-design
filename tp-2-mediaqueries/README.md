# MediaQueries
## Construction de CSS selon les modes portrait/paysage, résolution du terminal.

```css
@media all and (orientation: landscape | portrait) { ... }
```

```css
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { 
    /* Retina-specific stuff here */
}
```

[Media Queries for Standard Devices](https://goo.gl/Lzs4pb)

[Retina Display Media Query](https://goo.gl/1P6V7Z)