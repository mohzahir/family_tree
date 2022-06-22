import { Text } from "./Text";
export declare class Inputs extends Text {
    private _map;
    constructor(config: any, ev: any);
    setValue(obj: any, silent?: boolean): void;
    getValue(): {};
    clear(): void;
    toVDOM(): any;
    protected _changed(e: any): void;
    private _setValue;
}
